<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li class="active">>
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
				<div class="groups form">
					<?php echo $this->Form->create('Group'); ?>
						<fieldset>
							<legend><?php echo __('Edit Group'); ?></legend>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('name');
						?>
						</fieldset>
					<?php echo $this->Form->end(__('Submit')); ?>
				</div>
				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>

						<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
						<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div><!--/row-->
		</div>
  
	</div><!--/.container-->

</html>
