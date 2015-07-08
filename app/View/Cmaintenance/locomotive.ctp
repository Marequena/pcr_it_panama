<div class="container-fluid">
	  <div class="row row-offcanvas row-offcanvas-left">

		 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
		   
			<ul class="nav nav-sidebar">
			  <li >
				<?php echo $this->Html->link('Clients', array('controller' => 'cmaintenance', 'action' => 'index'));?>
			  </li>
			  <li>
			  <?php echo $this->Html->link('Stack Cars', array('controller' => 'cmaintenance', 'action' => 'stackcars'));?>
			  </li>
			  <li>
			  <?php echo $this->Html->link('Train', array('controller' => 'cmaintenance', 'action' => 'Trains'));?>
			  </li>
			  <li class="active">
			  <?php echo $this->Html->link('Locomotive', array('controller' => 'cmaintenance', 'action' => 'locomotive'));?>
			  </li>
			 <li>
			  <?php echo $this->Html->link('Add Contanier', array('controller' => 'cmaintenance', 'action' => 'container'));?>
			  </li>
			</ul>
			<ul class="nav nav-sidebar">
			  <li><a href="">Main</a></li>
			  
			</ul>
		
			</div><!--/span-->
				
			<div class="col-sm-9 col-md-10 main">


				<h1>Locomotives</h1>
				<?php 
				echo $this->Html->link('Add Locomotive', array('controller' => 'cmaintenance', 'action' => 'addLocomotives'));
				?>
				<table class='table table-striped'>
					
					<tr>
						<th><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
						<th><?php echo $this->Paginator->sort('Description', 'Description'); ?></th>
						<th><?php echo $this->Paginator->sort('Lenght', 'Lenght'); ?></th>
						<th>Actions</th>
					</tr>

					<?php foreach ($locom_list as $locomotive): ?>
					<tr>
						<td><?php echo $locomotive['Locomotive']['ID'];  ?></td>
						<td><?php echo $locomotive['Locomotive']['Description'];  ?></td>
						<td><?php echo $locomotive['Locomotive']['Length'];  ?></td>
						<td>
							<?php echo $this->Form->postLink('Delete',
								array('action' => 'deleteLocomotives', $locomotive['Locomotive']['ID']),
								array('confirm' => 'Are you sure?')
							)?>
							<?php echo $this->Html->link('Edit', array('action' => 'editLocomotives', $locomotive['Locomotive']['ID']));?>
						</td>

					   
					</tr>
					<?php endforeach; ?>

				</table>
				 <?php echo $this->Paginator->numbers(); ?>    
				 <?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
				<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
				<?php echo $this->Paginator->counter(); ?>
			</div><!--/row-->
		</div>
  
</div><!--/.container-->