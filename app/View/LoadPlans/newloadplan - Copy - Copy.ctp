<!DOCTYPE html>
<html lang="en">

	<head>



	</head>
	<body>

  

<div class="container-fluid">
    			  <div class="row row-offcanvas row-offcanvas-left">
				
				 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li >
						<?php echo $this->Html->link('Read Excel Files', array('controller' => 'cprocesses', 'action' => 'dataexcel'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning', array('controller' => 'cprocesses', 'action' => 'cargoplan'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning Excel', array('controller' => 'cprocesses', 'action' => 'cargoplanxls'));?>
					  </li>
					  <li class="active">
						<?php echo $this->Html->link('Load PLan', array('controller' => 'LoadPlans', 'action' => 'index'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Change Train Number', array('controller' => 'cprocesses', 'action' => 'changetrain'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Change Status', array('controller' => 'cprocesses', 'action' => 'changestatus'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Logs', array('controller' => 'cprocesses', 'action' => 'logs'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Delete Containers', array('controller' => 'cprocesses', 'action' => 'delcontainer'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cancel Containers', array('controller' => 'cprocesses', 'action' => 'cancelcontainer'));?>
					  </li>
					</ul>
					<ul class="nav nav-sidebar">
					  <li><a href="">Main</a></li>
					  
					</ul>
					
				  
				</div><!--/span-->
				
				
					<div id="dialogModal">
						<div class="contentWrap">
							<td>
							<table>
								<tr >
									<td ><?php echo $this->Form->input('cntrN2');?></td>
									
								</tr>
							</table>

							<table >
								<tr >
									<td><?php echo $this->Form->input('cntrN11');?></td>
									<td><?php echo $this->Form->input('cntrN12');?></td>
								</tr>
							</table>
							</td>
						</div>
					</div>
				   
   
				<div class="col-sm-9 col-md-10 main">
				  
				 
				  <div class="Plans form">
				  <?php echo $this->Form->create('Plan');
					$NS = array('N' => 'Panamá-Colón', 'S' => 'Colón-Panamá');
					?>
					<h1>New Load Plan</h1>
					<fieldset>
					<legend><?php echo __('Create Plan'); ?></legend>

					<table class='table table-striped'>
						<tr>
							<th><?php echo $this->Form->input('plan_date', array(
							'label' => 'Date',
							'dateFormat' => 'DMY',
							'minYear' => date('Y') - 70,
							'maxYear' => date('Y') - 18,
							)); ?></th>
							<th><?php echo $this->Html->script('jquery.min');?></th>
							<th><?php echo $this->Form->input('train_id',array('options' => $locomotives, 'label' => 'Train')); ?></th>
							<th><?php echo $this->Form->input('ns',	array('options' => $NS, 'label' => 'N/S')); ?></th>
						</tr>
					</table>
										
					<div class="row placeholders">
						<div class="col-xs-2 col-sm-1 placeholder text-center">
						  <?php echo $this->Html->image('logo1.jpg', array( 'class' =>'center-block img-responsive img-circle','alt'=>'Generic placeholder thumbnail','url' => array('controller' => 'recipes', 'action' => 'view', 6)));  ?>
						  <?php echo $this->Html->link(__('Add Client', true), array("controller"=>"cmaintenance", "action"=>"addClients"), array("class"=>"overlay", "title"=>"Add Client"));?>
						  <h4>TOP A</h4>
						</div>
						<div class="col-xs-2 col-sm-1 placeholder text-center">
						  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
						  <h4>TOP B</h4>
						</div>
						<div class="col-xs-2 col-sm-1 placeholder text-center">
						  <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
						  <h4>TOP C</h4>
						</div>
						<div class="col-xs-2 col-sm-1 placeholder text-center">
						  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
						  <h4>TOP D</h4>
						</div>
						<div class="col-xs-2 col-sm-1 placeholder text-center">
						  <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
						  <h4>TOP E</h4>
						</div>
					</div> 
					<table class='table table-striped'>
					<tr>
					<th>Name</th>
					<th>TOP A</th>
					<th>TOP B</th>
					<th>TOP C</th>
					<th>TOP D</th>
					<th>TOP E</th>
					<th><a style="cursor:pointer;" onclick="clickAdd();"><span style="background:#aaa;padding:1px 7px;">+</span></a></th>
					</tr>
					<?php if ($this->request->data) :?>
					<?php foreach ($this->request->data['plan_cars'] as $i=>$v) :?>
					<tr id="tr<?php echo $i;?>">
						<?php if (isset($v['id']) and !empty($v['id'])) :?>
						<?php //echo $this->Form->input('id', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}Id", 'name'=>"data[plan_cars][$i][id]", 'value'=>$v['id']));?>
						<?php endif;?>
						<td><?php echo $this->Form->input('stackcars_id', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}stackcars_id", 'name'=>"data[plan_cars][$i][stackcars_id]", 'value'=>$v['stackcars_id']));?></td>
						<td>
							<table>
								<tr >
									<td ><?php echo $this->Form->input('topan2', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topan2", 'name'=>"data[plan_cars][$i][topan2]", 'value'=>$v['topan2']));?></td>
									
								</tr>
							</table>

							<table >
								<tr >
									<td><?php echo $this->Form->input('topan11', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topan11", 'name'=>"data[plan_cars][$i][topan11]", 'value'=>$v['topan11']));?></td>
									<td><?php echo $this->Form->input('topan12', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topan12", 'name'=>"data[plan_cars][$i][topan12]", 'value'=>$v['topan12']));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn2', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topbn2", 'name'=>"data[plan_cars][$i][topbn2]", 'value'=>$v['topbn2']));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn11', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topbn11", 'name'=>"data[plan_cars][$i][topbn11]", 'value'=>$v['topbn11']));?></td>
									<td><?php echo $this->Form->input('topbn12', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topbn12", 'name'=>"data[plan_cars][$i][topbn12]", 'value'=>$v['topbn12']));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn2', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topcn2", 'name'=>"data[plan_cars][$i][topcn2]", 'value'=>$v['topcn2']));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn11', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topcn11", 'name'=>"data[plan_cars][$i][topcn11]", 'value'=>$v['topcn11']));?></td>
									<td><?php echo $this->Form->input('topcn12', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topcn12", 'name'=>"data[plan_cars][$i][topcn12]", 'value'=>$v['topcn12']));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn2', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topdn2", 'name'=>"data[plan_cars][$i][topdn2]", 'value'=>$v['topdn2']));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn11', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topdn11", 'name'=>"data[plan_cars][$i][topdn11]", 'value'=>$v['topdn11']));?></td>
									<td><?php echo $this->Form->input('topdn12', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topdn12", 'name'=>"data[plan_cars][$i][topdn12]", 'value'=>$v['topdn12']));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topen2', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topen2", 'name'=>"data[plan_cars][$i][topen2]", 'value'=>$v['topen2']));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topen11', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topen11", 'name'=>"data[plan_cars][$i][topen11]", 'value'=>$v['topen11']));?></td>
									<td><?php echo $this->Form->input('topen12', array('label'=>false, 'div'=>false, 'id'=>"plan_cars{$i}topen12", 'name'=>"data[plan_cars][$i][topen12]", 'value'=>$v['topen12']));?></td>
								</tr>
							</table>
						</td>
						<td><a style="cursor:pointer;" onclick="$('#tr<?php echo $i;?>').detach();"><span style="background:#aaa;padding:1px 8px;">-</span></a></td>
					</tr>

					<?php endforeach;?> 
					<?php else : ?>
					<tr id="tr0">
						<td><?php echo $this->Form->input('stackcars_id',array('options' => $stackcars, 'label'=>false, 'div'=>false, 'id'=>'plan_cars0stackcars_id', 'name'=>"data[plan_cars][0][stackcars_id]"));?></td>
						<td>
							<table >
								<tr >
									<td><?php echo $this->Form->input('topan2', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topan2', 'name'=>"data[plan_cars][0][topan2]"));?></td>
									<td ><div class="ui-widget"><?php echo $this->Form->input('topan2',array('id'=>'autocomplete','label'=>'autoComplete'));?></div></td>
								</tr>
							</table>

							<table >
								<tr >
									<td><?php echo $this->Form->input('topan11', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topan11', 'name'=>"data[plan_cars][0][topan11]"));?></td>
									<td><?php echo $this->Form->input('topan12', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topan12', 'name'=>"data[plan_cars][0][topan12]"));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn2', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topbn2', 'name'=>"data[plan_cars][0][topbn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn11', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topbn11', 'name'=>"data[plan_cars][0][topbn11]"));?></td>
									<td><?php echo $this->Form->input('topbn12', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topbn12', 'name'=>"data[plan_cars][0][topbn12]"));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn2', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topcn2', 'name'=>"data[plan_cars][0][topcn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn11', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topcn11', 'name'=>"data[plan_cars][0][topcn11]"));?></td>
									<td><?php echo $this->Form->input('topcn12', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topcn12', 'name'=>"data[plan_cars][0][topcn12]"));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn2', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topdn2', 'name'=>"data[plan_cars][0][topdn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn11', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topdn11', 'name'=>"data[plan_cars][0][topdn11]"));?></td>
									<td><?php echo $this->Form->input('topdn12', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topdn12', 'name'=>"data[plan_cars][0][topdn12]"));?></td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topen2', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topen2', 'name'=>"data[plan_cars][0][topen2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topen11', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topen11', 'name'=>"data[plan_cars][0][topen11]"));?></td>
									<td><?php echo $this->Form->input('topen12', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0topen12', 'name'=>"data[plan_cars][0][topen12]"));?></td>
								</tr>
							</table>
						</td>
						<td><a style="cursor:pointer;" onclick="$('#tr0').detach();"><span style="background:#aaa;padding:1px 8px;">-</span></a></td>
					</tr>
					<?php endif; ?>
					 
					<tr id="trHiddenCounterplan_cars" style="display:none;">
					<input id="tr_d_counterplan_cars" type="hidden" value="<?php echo $this->request->data?(sizeof($this->request->data['plan_cars'])-1):0;?>">
					</tr>
					 
					</table>
					<!-- end tambahan form tabel plan_cars -->
					</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
					</div>
					<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>
					 
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Plan.id'))); ?></li>
					<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
					</ul>
					</div>
					 
					<!-- Ini adalah duplikasi elemen row plan_cars, yang akan dipakai dalam penambahan row baru melalui javascript -->
					<div style="display:none;" id="htmlplan_cars">
					<xzztr id="trzzz">
						<xzztd><?php echo $this->Form->input('stackcars_id', array('label'=>false, 'div'=>false, 'id'=>'plan_cars0stackcars_id', 'name'=>"data[plan_cars][zzz][stackcars_id]"));?></xzztd>
						<xzztd>
							<table>
								<tr>
									<td><?php echo $this->Form->input('topan2', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopan2', 'name'=>"data[plan_cars][zzz][topan2]"));?></td>
								</tr>
							</table>

							<table >
								<tr >
									<td><?php echo $this->Form->input('topan11', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopan11', 'name'=>"data[plan_cars][zzz][topan11]"));?></td>
									<td><?php echo $this->Form->input('topan12', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopan12', 'name'=>"data[plan_cars][zzz][topan12]"));?></td>
								</tr>
							</table>
						</xzztd>
						<xzztd>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn2', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopbn2', 'name'=>"data[plan_cars][zzz][topbn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topbn11', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopbn11', 'name'=>"data[plan_cars][zzz][topbn11]"));?></td>
									<td><?php echo $this->Form->input('topbn12', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopbn12', 'name'=>"data[plan_cars][zzz][topbn12]"));?></td>
								</tr>
							</table>
						</xzztd>
						<xzztd>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn2', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopcn2', 'name'=>"data[plan_cars][zzz][topcn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topcn11', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopcn11', 'name'=>"data[plan_cars][zzz][topcn11]"));?></td>
									<td><?php echo $this->Form->input('topcn12', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopcn12', 'name'=>"data[plan_cars][zzz][topcn12]"));?></td>
								</tr>
							</table>
						</xzztd>
						<xzztd>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn2', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopdn2', 'name'=>"data[plan_cars][zzz][topdn2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topdn11', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopdn11', 'name'=>"data[plan_cars][zzz][topdn11]"));?></td>
									<td><?php echo $this->Form->input('topdn12', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopdn12', 'name'=>"data[plan_cars][zzz][topdn12]"));?></td>
								</tr>
							</table>
						</xzztd>
						<xzztd>
							<table>
								<tr >
									<td><?php echo $this->Form->input('topen2', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopen2', 'name'=>"data[plan_cars][zzz][topen2]"));?></td>
								</tr>
							</table>

							<table>
								<tr >
									<td><?php echo $this->Form->input('topen11', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopen11', 'name'=>"data[plan_cars][zzz][topen11]"));?></td>
									<td><?php echo $this->Form->input('topen12', array('label'=>false, 'div'=>false, 'id'=>'plan_carszzztopen12', 'name'=>"data[plan_cars][zzz][topen12]"));?></td>
								</tr>
							</table>
						</xzztd>
						<xzztd><a style="cursor:pointer;" onclick="$('#trzzz').detach();"><span style="background:#aaa;padding:1px 8px;">-</span></a></xzztd>

					</xzztr>
					</div>
					 
					<!-- script yang dipanggil dari form plan_cars -->
					<script type="text/javascript">
					function clickAdd(){
					html=$('#htmlplan_cars').html().toString();
					var nextCounter=Number($('#tr_d_counterplan_cars').val())+1;
					$('#tr_d_counterplan_cars').val(nextCounter);
					while (html != (html = html.replace("zzz", nextCounter)));
					while (html != (html = html.replace("xzz", '')));
					$('#trHiddenCounterplan_cars').before(html);
					}
					</script>
					
					
					
				</div><!--/row-->
			</div>
  
</div><!--/.container-->


        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
  <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#autocomplete" ).autocomplete({
      source: availableTags
    });
  });
  </script>
	</html>
