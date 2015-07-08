<?php		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery-ui');	
		//echo $this->Html->script('application');		
		
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('jquery-ui.min');
		echo $this->Html->css('jquery-ui.theme');
		echo $this->Html->css('jquery-ui.theme.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('styles.css');
		echo $this->Html->css('LoginStyleSheet.css');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
?>

<script>
$(document).ready(function() {
    //prepare the dialog
    $( "#dialogModalSCar" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 500
            },
        hide: {
            effect: "blind",
            duration: 500
            },
        modal: true
        });
    //respond to click event on anything with 'overlay' class
    $(".overlaySCar").click(function(event){
        event.preventDefault();
        $('#contentWrap').load($(this).attr("href"));  //load content from href of link
        $('#dialogModalSCar').dialog('option', 'title', $(this).attr("title"));  //make dialog title that of link
        $('#dialogModalSCar').dialog('open');  //open the dialog
        });
    });
	
$(document).ready(function() {
    //prepare the dialog
    $( "#dialogModalCNTRA" ).dialog({
        width: 360,
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 500
            },
        hide: {
            effect: "blind",
            duration: 500
            },
        modal: true
        });
    //respond to click event on anything with 'overlay' class
    $(".overlayCNTRA").click(function(event){
        event.preventDefault();
        $('#contentWrap').load($(this).attr("href"));  //load content from href of link
        $('#dialogModalCNTRA').dialog('option', 'title', $(this).attr("title")+$(this).attr("numcar"));  //make dialog title that of link
//        document.getElementById(“prueba”).value = $(this).attr("title")+$(this).attr("numcar");

        $("#CNTRANumcol").val($(this).attr("numcol"));
        $("#CNTRANumcar").val($(this).attr("numcar"));
        //alert($("#CNTRANumcar").val().toString());
 
        $('#dialogModalCNTRA').dialog('open');  //open the dialog
        });
    });


	  $(function msg() {
    $( "#dialogMessage" ).dialog({
		  autoOpen: false,
		  show: {
			effect: "blind",
			duration: 1000
		  },
		  hide: {
			effect: "explode",
			duration: 1000
		  }
		});
	 
		$( "#openerMessage" ).click(function() {
		  $( "#dialogMessage" ).dialog( "open" );
		});
	});
	
	$( "#dialogMessage" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
   
</script>


<div id="dialog-message"  title="Information">
	
	<?php
		if(isset($mensage_info))
			if (!empty($mensage_info))
				{
				?>
				<script>
				       $(function() {
					$( "#dialog-message" ).dialog({
					  modal: true,
					  buttons: {
						Ok: function() {
						  $( this ).dialog( "close" );
						}
					  }
					});
				  });
				</script>
				  <p>
					<?php pr($mensage_info); ?>
				  </p>
				  
			  <?php
		}
		?>
		<div class="contentWrap">
			
		</div>
</div>




<div id="dialogModalCNTRA">
	<?php
        	echo $this->Form->create('CNTRA',array(
    'url' => array('controller'=>'LoadPlans', 'action'=>'newloadplan')));
	
		
	?>
	<table class='table table-striped'>
		<tr>
			<td  align="center">
				<table>
					<tr >
						<td ><?php echo $this->Form->input('cntrN2', array('label' => false));?></td>
						
					</tr>
				</table>

				<table >
					<tr >
						<td><?php echo $this->Form->input('cntrN11', array('label' => false));?></td>
						<td><?php echo $this->Form->input('cntrN12', array('label' => false));?></td>
                                                <p><?php  echo $this->Form->hidden('numcar',array( 'label' =>False));?></p>
                                                <p><?php  echo $this->Form->hidden('numcol',array( 'label' =>False));?></p>
					</tr>
				</table>
			</td>
		</tr>		
	</table>
	<?php
            echo $this->Form->end('Continue');
	?>
	
		<div class="contentWrap">
			
		</div>
</div>

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
				
				<div class="col-sm-9 col-md-10 main">
				  
					

					<?php echo $this->Form->create('Plan');
						$NS = array('N' => 'Panamá-Colón', 'S' => 'Colón-Panamá');
					?>
					<h1>New Load Plan</h1>
					<legend><?php echo __('Create Plan'); ?></legend>
                                        <div class="table-responsive">
                                            <table class='table table-striped'>
                                                    <tr>
                                                            <th>
                                                            <?php echo $this->Form->input('plan_date', array(
                                                            'label' => 'Date',
                                                            'dateFormat' => 'DMY',
                                                            'minYear' => date('Y') - 70,
                                                            'maxYear' => date('Y') - 18,
                                                            )); ?></th>
                                                            <th><?php echo $this->Html->script('jquery.min');?></th>
                                                            <th><?php echo $this->Form->input('train_id',array('options' => $locomotives, 'label' => 'Train')); ?></th>
                                                            <th><?php echo $this->Form->input('ns',	array('options' => $NS, 'label' => 'N/S')); ?></th>
                                                    </tr>

                                            <?php  echo $this->Html->link(__('Add Client', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlay", "title"=>"Add Client"));?>
					<div class="col-xs-2 col-sm-1 placeholder text-center">
					<div class="table-responsive">
					<table class='table table-striped'>
						<tr>
							<td  align="center">
								  <h4><?php  echo "Car";?></h4>
							</td>
							<td  align="center">
								  <h4><?php  echo  "A";?></h4>
							</td>
							<td  align="center">
								  <h4><?php  echo  "B";?></h4>
							</td>
							<td  align="center">
								  <h4><?php  echo  "C";?></h4>
							</td>
							<td  align="center">
								  <h4><?php  echo  "D";?></h4>
							</td>
							<td  align="center">
								  <h4><?php  echo  "E";?></h4>
							</td>
							
						</tr>

                                                
                                                    <?php //pr($arrayCars);?>
                                                    
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False,'value' => $arrayCars['1cars']['stackcars_id']));?></p>
							</td>
							<td >
                                                                
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayCNTRA','alt'=>'Generic placeholder thumbnail', "title"=>$arrayCars['1cars']['topamsg'],"numcar"=>"1","numcol"=>"1",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h6><?php  echo "Available : "; echo ( 55- $arrayCars['1cars']['topawght']); echo " Ton" ;?></h6>
                                                                  <h6><?php  echo 'Total Weight : '; echo $arrayCars['1cars']['topawght']; echo " Ton"?></h6>
                                                                  <p><?php  echo $this->Form->hidden('topan11',array( 'label' =>False,'value' => $arrayCars['1cars']['topan11']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topan12',array( 'label' =>False,'value' => $arrayCars['1cars']['topan12']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topan2',array( 'label' =>False,'value' => $arrayCars['1cars']['topan2']));?></p>
							</td>
							<td >
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayCNTRA','alt'=>'Generic placeholder thumbnail', "title"=>$arrayCars['1cars']['topamsg'],"numcar"=>"1","numcol"=>"2",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h6><?php  echo "Available : "; echo ( 55- $arrayCars['1cars']['topbwght']); echo " Ton" ;?></h6>
                                                                  <h6><?php  echo 'Total Weight : '; echo $arrayCars['1cars']['topbwght']; echo " Ton"?></h6>
                                                                  <p><?php  echo $this->Form->hidden('topbn11',array( 'label' =>False,'value' => $arrayCars['1cars']['topbn11']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topbn12',array( 'label' =>False,'value' => $arrayCars['1cars']['topbn12']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topbn2',array( 'label' =>False,'value' => $arrayCars['1cars']['topbn2']));?></p>

							</td>
							<td >
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayCNTRA','alt'=>'Generic placeholder thumbnail', "title"=>$arrayCars['1cars']['topcmsg'],"numcar"=>"1","numcol"=>"3",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h6><?php  echo "Available : "; echo ( 55- $arrayCars['1cars']['topcwght']); echo " Ton" ;?></h6>
                                                                  <h6><?php  echo 'Total Weight : '; echo $arrayCars['1cars']['topcwght']; echo " Ton"?></h6>
                                                                  <p><?php  echo $this->Form->hidden('topcn11',array( 'label' =>False,'value' => $arrayCars['1cars']['topcn11']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topcn12',array( 'label' =>False,'value' => $arrayCars['1cars']['topcn12']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topcn2',array( 'label' =>False,'value' => $arrayCars['1cars']['topcn2']));?></p>

							</td>
							<td >
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayCNTRA','alt'=>'Generic placeholder thumbnail', "title"=>$arrayCars['1cars']['topdmsg'],"numcar"=>"1","numcol"=>"4",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h6><?php  echo "Available : "; echo ( 55- $arrayCars['1cars']['topdwght']); echo " Ton" ;?></h6>
                                                                  <h6><?php  echo 'Total Weight : '; echo $arrayCars['1cars']['topdwght']; echo " Ton"?></h6>
                                                                  <p><?php  echo $this->Form->hidden('topdn11',array( 'label' =>False,'value' => $arrayCars['1cars']['topdn11']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topdn12',array( 'label' =>False,'value' => $arrayCars['1cars']['topdn12']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topdn2',array( 'label' =>False,'value' => $arrayCars['1cars']['topdn2']));?></p>

							</td>
							<td  >
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayCNTRA','alt'=>'Generic placeholder thumbnail', "title"=>$arrayCars['1cars']['topemsg'],"numcar"=>"1","numcol"=>"5",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h6><?php  echo "Available : "; echo ( 55- $arrayCars['1cars']['topewght']); echo " Ton" ;?></h6>
                                                                  <h6><?php  echo 'Total Weight : '; echo $arrayCars['1cars']['topewght']; echo " Ton"?></h6>
                                                                  <p><?php  echo $this->Form->hidden('topen11',array( 'label' =>False,'value' => $arrayCars['1cars']['topen11']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topen12',array( 'label' =>False,'value' => $arrayCars['1cars']['topen12']));?></p>
                                                                  <p><?php  echo $this->Form->hidden('topen2',array( 'label' =>False,'value' => $arrayCars['1cars']['topen2']));?></p>
							</td>
							
						</tr>
						<tr>
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False));?></p>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopA','alt'=>'Generic placeholder thumbnail', "title"=>"TOP A",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP A', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopA", "title"=>"TOP A"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopB','alt'=>'Generic placeholder thumbnail', "title"=>"TOP B",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP B', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopB", "title"=>"TOP B"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopC','alt'=>'Generic placeholder thumbnail', "title"=>"TOP C",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP C', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopC", "title"=>"TOP C"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopD','alt'=>'Generic placeholder thumbnail', "title"=>"TOP D",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP D', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopD", "title"=>"TOP D"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopE','alt'=>'Generic placeholder thumbnail', "title"=>"TOP E",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP E', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopE", "title"=>"TOP E"));?></h4>
							</td>
							
						</tr>
						<tr>
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False));?></p>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopA','alt'=>'Generic placeholder thumbnail', "title"=>"TOP A",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP A', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopA", "title"=>"TOP A"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopB','alt'=>'Generic placeholder thumbnail', "title"=>"TOP B",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP B', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopB", "title"=>"TOP B"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopC','alt'=>'Generic placeholder thumbnail', "title"=>"TOP C",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP C', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopC", "title"=>"TOP C"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopD','alt'=>'Generic placeholder thumbnail', "title"=>"TOP D",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP D', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopD", "title"=>"TOP D"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopE','alt'=>'Generic placeholder thumbnail', "title"=>"TOP E",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP E', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopE", "title"=>"TOP E"));?></h4>
							</td>
							
						</tr>
						<tr>
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False));?></p>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopA','alt'=>'Generic placeholder thumbnail', "title"=>"TOP A",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP A', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopA", "title"=>"TOP A"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopB','alt'=>'Generic placeholder thumbnail', "title"=>"TOP B",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP B', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopB", "title"=>"TOP B"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopC','alt'=>'Generic placeholder thumbnail', "title"=>"TOP C",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP C', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopC", "title"=>"TOP C"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopD','alt'=>'Generic placeholder thumbnail', "title"=>"TOP D",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP D', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopD", "title"=>"TOP D"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopE','alt'=>'Generic placeholder thumbnail', "title"=>"TOP E",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP E', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopE", "title"=>"TOP E"));?></h4>
							</td>
							
						</tr>
						<tr>
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False));?></p>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopA','alt'=>'Generic placeholder thumbnail', "title"=>"TOP A",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP A', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopA", "title"=>"TOP A"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopB','alt'=>'Generic placeholder thumbnail', "title"=>"TOP B",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP B', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopB", "title"=>"TOP B"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopC','alt'=>'Generic placeholder thumbnail', "title"=>"TOP C",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP C', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopC", "title"=>"TOP C"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopD','alt'=>'Generic placeholder thumbnail', "title"=>"TOP D",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__(' D', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopD", "title"=>"TOP D"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopE','alt'=>'Generic placeholder thumbnail', "title"=>"TOP E",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP E', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopE", "title"=>"TOP E"));?></h4>
							</td>
						</tr>
						<tr>
							<td  align="center">
								  <p><?php  echo $this->Form->input('stackcars_num',array( 'label' =>False));?></p>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopA','alt'=>'Generic placeholder thumbnail', "title"=>"TOP A",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP A', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopA", "title"=>"TOP A"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopB','alt'=>'Generic placeholder thumbnail', "title"=>"TOP B",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP B', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopB", "title"=>"TOP B"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopC','alt'=>'Generic placeholder thumbnail', "title"=>"TOP C",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP C', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopC", "title"=>"TOP C"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopD','alt'=>'Generic placeholder thumbnail', "title"=>"TOP D",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP D', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopD", "title"=>"TOP D"));?></h4>
							</td>
							<td  align="center">
								  <?php echo $this->Html->image('cars.jpg', array( 'class' =>'center-block img-responsive img-circle overlayTopE','alt'=>'Generic placeholder thumbnail', "title"=>"TOP E",'url' => array("controller"=>"loadplans", "action"=>"newloadplan")));  ?>
								  <h4><?php  echo $this->Html->link(__('TOP E', true), array("controller"=>"loadplans", "action"=>"newloadplan"), array("class"=>"overlayTopE", "title"=>"TOP E"));?></h4>
							</td>
						</tr>
					</table>
					</div>

					<div class="table-responsive">
					<table class='table table-striped'>
						<tr>
							<td  align="center">
								  <h5><?php  echo "Rail Lenght";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Stack Cars Full";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Stack Cars Empty";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Total Cars";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Total Weight";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Container Full";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Container Empties";?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo  "Container Total";?></h5>
							</td>
							
						</tr>
						<tr>
							<td  align="center">
								  <h5><?php  echo $sessionplan['raillenght'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['carsfull'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['carsempty'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['carstotal'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['totalwght'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['cntrfull'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['cntrempty'];?></h5>
							</td>
							<td  align="center">
								  <h5><?php  echo $sessionplan['cntrtotal'];?></h5>
							</td>
							
						</tr>


					</table>
					</div>

                                        </div>
                            
                                        </div>
				  
				</div><!--/row-->
			</div>
  
</div><!--/.container-->
