<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li>
						<?php echo $this->Html->link('Groups', array('controller' => 'groups', 'action' => 'index'));?>
					  </li>
					  <li class="active">
						<?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'));?>
					  </li>
					</ul>
					<ul class="nav nav-sidebar">
					  <li>
						<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));?>
					  </li>
					  
					</ul>
	  
			</div><!--/span-->
			<div class="col-sm-9 col-md-10 main">
									<div class="users index">
							<h2><?php echo __('Users'); ?></h2>
							<?php 
								echo $this->Html->link('New User', array('controller' => 'users', 'action' => 'add'));
							?>
							<table class='table table-striped'>
							<thead>
							<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('username'); ?></th>
									<th><?php echo $this->Paginator->sort('password'); ?></th>
									<th><?php echo $this->Paginator->sort('group_id'); ?></th>
									<th><?php echo $this->Paginator->sort('created'); ?></th>
									<th><?php echo $this->Paginator->sort('modified'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($users as $user): ?>
								<tr>
									<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
									<td>
										<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
									</td>
									<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
									<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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
