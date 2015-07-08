<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li class="active">
						<?php echo $this->Html->link('Groups', array('controller' => 'groups', 'action' => 'index'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'));?>
					  </li>
					</ul>
					<ul class="nav nav-sidebar">
					  <li><a href="">Main</a></li>
					  
					</ul>
	  
			</div><!--/span-->
			<div class="col-sm-9 col-md-10 main">
			
				<div class="groups index">
					<h2><?php echo __('Groups'); ?></h2>
					<?php 
					echo $this->Html->link('New Group', array('controller' => 'groups', 'action' => 'add'));
					?>
					<table class='table table-striped'>
						<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('name'); ?></th>
								<th><?php echo $this->Paginator->sort('created'); ?></th>
								<th><?php echo $this->Paginator->sort('modified'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						</thead>
							<tbody>
							<?php foreach ($groups as $group): ?>
							<tr>
								<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
								<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
								<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
								<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $group['Group']['id']))); ?>
								</td>
							</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php echo $this->Paginator->numbers(); ?>    
						<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
						<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
						<?php echo $this->Paginator->counter(); ?>
			</div><!--/row-->
		</div>
  
	</div><!--/.container-->

</html>
