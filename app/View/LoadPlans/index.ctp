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
				<div class="table-responsive"><div class="table-responsive">
				<div class="col-sm-9 col-md-10 main">
				  
				 
				  
					<h1>Load Plan</h1>
					<?php 
					echo $this->Html->link('New Load Plan', array('controller' => 'loadPlans', 'action' => 'newloadplan'));
					//echo $this->Html->link(__('Add Client', true), array("controller"=>"cmaintenance", "action"=>"addClients"), array("class"=>"overlay", "title"=>"Add Client"));
					?>
					<table class='table table-striped'>
						
						<tr>
							<th><?php echo $this->Paginator->sort( 'id','ID'); ?></th>
							<th><?php echo $this->Paginator->sort('train_id','Train' ); ?></th>
							<th><?php echo $this->Paginator->sort('ns','NS'); ?></th>
							<th><?php echo $this->Paginator->sort('length', 'Length'); ?></th>
							<th><?php echo $this->Paginator->sort('weight', 'Weight'); ?></th>
							<th><?php echo $this->Paginator->sort('Cars Full', 'cars_full'); ?></th>
							<th><?php echo $this->Paginator->sort('Cars Empty', 'cars_empty'); ?></th>
							<th><?php echo $this->Paginator->sort('Cont. Full', 'cntr_full'); ?></th>
							<th><?php echo $this->Paginator->sort('Cont. Empty', 'cntr_empty'); ?></th>
							<th><?php echo $this->Paginator->sort('Total. Cars', 'cars_total'); ?></th>
							<th><?php echo $this->Paginator->sort('Total Cont.', 'cntr_total'); ?></th>
							<th><?php echo $this->Paginator->sort('Status', 'status'); ?></th>
							<th>Actions</th>
						</tr>
						
						<?php foreach ($plans as $loadplan){ ?>
							<tr>
								<td>
									<?php echo $this->Html->link($loadplan['Plan']['ID'], 
											array('action' => 'view', $loadplan['Plan']['ID']));?>

								</td>
								<td><?php echo $loadplan['Plan']['train_id'];  ?></td>
								
								<td><?php echo $loadplan['Plan']['ns']; ?></td>
								<td><?php echo $loadplan['Plan']['length']; ?></td>
								<td><?php echo $loadplan['Plan']['weight']; ?></td>
								<td><?php echo $loadplan['Plan']['cars_full']; ?></td>
								<td><?php echo $loadplan['Plan']['cars_empty']; ?></td>
								<td><?php echo $loadplan['Plan']['cntr_full']; ?></td>
								<td><?php echo $loadplan['Plan']['cntr_empty']; ?></td>
								<td><?php echo $loadplan['Plan']['cars_total']; ?></td>
								<td><?php echo $loadplan['Plan']['cntr_total']; ?></td>
								<td><?php echo $loadplan['Plan']['status']; ?></td>
								<td>
									<?php echo $this->Form->postLink('Delete',
										array('action' => 'deleteloadplans', $loadplan['Plan']['ID']),
										array('confirm' => 'Are you sure?')
									)?>
									
									<?php echo $this->Html->link('Edit', array('action' => 'editloadplans', $loadplan['Plan']['ID']));?>
								</td>

							   
							</tr>
						<?php } ?>

					</table>
					 <?php echo $this->Paginator->numbers(); ?>    
					 <?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
					<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
					<?php echo $this->Paginator->counter(); ?>
				</div><!--/row-->
				</div>
			</div>
  
</div><!--/.container-->

</html>
