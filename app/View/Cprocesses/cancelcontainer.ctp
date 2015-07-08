

	<div class="container-fluid">
    			  <div class="row row-offcanvas row-offcanvas-left">
				
				 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li>
						<?php echo $this->Html->link('Read Excel Files', array('controller' => 'cprocesses', 'action' => 'dataexcel'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning', array('controller' => 'cprocesses', 'action' => 'cargoplan'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning Excel', array('controller' => 'cprocesses', 'action' => 'cargoplanxls'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Load PLan', array('controller' => 'loadplans', 'action' => 'index'));?>
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
					  <li class="active">
						<?php echo $this->Html->link('Manager Containers', array('controller' => 'cprocesses', 'action' => 'cancelcontainer'));?>
					  </li>
					</ul>
					<ul class="nav nav-sidebar">
					  <li><a href="">Main</a></li>
					  
					</ul>
					
				  
				</div><!--/span-->
				
				<div class="col-sm-9 col-md-10 main">
				  
				 
				  
				  <h1 class="page-header">
					
				  </h1>

					<div class="row placeholders">
					
					</div>
					<div class="table-responsive">
					
						<?php 
							//echo $this->Html->link('New Load Plan', array('controller' => 'LoadPLans', 'action' => 'newloadplan'));
							?>
							<table class='table table-striped'>
								<thead>
								<tr>

									<th><?php echo $this->Paginator->sort('line op','Line OP' ); ?></th>
									<th><?php echo $this->Paginator->sort('rail','Rail'); ?></th>
									<th><?php echo $this->Paginator->sort('container', 'Container'); ?></th>
									<th><?php echo $this->Paginator->sort('size', 'Size'); ?></th>
									<th><?php echo $this->Paginator->sort('type', 'Type'); ?></th>
									<th><?php echo $this->Paginator->sort('wght', 'Weight'); ?></th>
									<th><?php echo $this->Paginator->sort('pol', 'POL'); ?></th>
									<th><?php echo $this->Paginator->sort('pod', 'POD'); ?></th>
									<th><?php echo $this->Paginator->sort('line', 'Line'); ?></th>
									<th><?php echo $this->Paginator->sort('blno', 'BL No'); ?></th>
									<th><?php echo $this->Paginator->sort('carrier', 'Carrier'); ?></th>
									<th><?php echo $this->Paginator->sort('from vsl/voy', 'From vsl/voy'); ?></th>
									<th><?php echo $this->Paginator->sort('f/e', 'F/E'); ?></th>
									<th><?php echo $this->Paginator->sort('n/s', 'N/S'); ?></th>
									<th><?php echo $this->Paginator->sort('puerto', 'Puerto'); ?></th>
									<th>Actions</th>
									
								</tr>
								</thead>
								<?php foreach ($contaniers as $cntr){ ?>
									<tr>
										
										<td><?php echo $cntr['importdatafile']['line op'];  ?></td>
										<td><?php echo $cntr['importdatafile']['rail'];  ?></td>
										<td><?php echo $cntr['importdatafile']['container'];  ?></td>
										<td><?php echo $cntr['importdatafile']['size'];  ?></td>
										<td><?php echo $cntr['importdatafile']['type'];  ?></td>
										<td><?php echo $cntr['importdatafile']['wght'];  ?></td>
										<td><?php echo $cntr['importdatafile']['pol'];  ?></td>
										<td><?php echo $cntr['importdatafile']['pod'];  ?></td>
										<td><?php echo $cntr['importdatafile']['line'];  ?></td>
										<td><?php echo $cntr['importdatafile']['blno'];  ?></td>
										<td><?php echo $cntr['importdatafile']['carrier'];  ?></td>
										<td><?php echo $cntr['importdatafile']['from vsl/voy'];  ?></td>
										<td><?php echo $cntr['importdatafile']['f/e'];  ?></td>
										<td><?php echo $cntr['importdatafile']['n/s'];  ?></td>
										<td><?php echo $cntr['importdatafile']['puerto'];  ?></td>
										
										<td>
											<?php echo $this->Html->link('Add', array('action' => 'addcontainer', $cntr['importdatafile']['ID']));?>
											<?php echo $this->Form->postLink('Delete',array('action' => 'deletecontainer', $cntr['importdatafile']['ID']),array('confirm' => 'Are you sure?'));?>
											<?php 
											if (!$cntr['importdatafile']['cancel']) {
												echo $this->Html->link('Cancelar', array('action' => 'cancel', $cntr['importdatafile']['ID']));
											}
											else
											{
												echo $this->Html->link('Active', array('action' => 'active', $cntr['importdatafile']['ID']));
											}?>
											
											
										</td>

									   
									</tr>
								<?php } ?>

							</table>
							 <?php echo $this->Paginator->numbers(); ?>    
							 <?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
							<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
							<?php echo $this->Paginator->counter(); ?>
					
			  
					</div>
				</div><!--/row-->
			</div>
  
</div><!--/.container-->
