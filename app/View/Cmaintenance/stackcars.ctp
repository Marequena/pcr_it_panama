<div class="container-fluid">
	  <div class="row row-offcanvas row-offcanvas-left">

		 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
		   
			<ul class="nav nav-sidebar">
			  <li >
				<?php echo $this->Html->link('Clients', array('controller' => 'cmaintenance', 'action' => 'index'));?>
			  </li>
			  <li class="active">
			  <?php echo $this->Html->link('Stack Cars', array('controller' => 'cmaintenance', 'action' => 'stackcars'));?>
			  </li>
			  <li>
			  <?php echo $this->Html->link('Train', array('controller' => 'cmaintenance', 'action' => 'Trains'));?>
			  </li>
			  <li>
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


				<h1>Stack Cars</h1>
				<?php 
				echo $this->Html->link('Add Stack Car', array('controller' => 'cmaintenance', 'action' => 'addScars'));
				?>
				<table class='table table-striped'>
					
					<tr>
						<th><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
						<th><?php echo $this->Paginator->sort('Description', 'Description'); ?></th>
						<th><?php echo $this->Paginator->sort('Ton', 'Ton'); ?></th>
						<th><?php echo $this->Paginator->sort('Lenght', 'Lenght'); ?></th>
						<th><?php echo $this->Paginator->sort('Weight', 'Weight'); ?></th>
						<th>Actions</th>
					</tr>

					<?php foreach ($scar_list as $stackcar): ?>
					<tr>
						<td><?php echo $stackcar['StackCar']['ID'];  ?></td>
						<td><?php echo $stackcar['StackCar']['Description'];  ?></td>
						<td><?php echo $stackcar['StackCar']['Ton'];  ?></td>
						<td><?php echo $stackcar['StackCar']['Length'];  ?></td>
						<td><?php echo $stackcar['StackCar']['Weight'];  ?></td>
						<td>
							<?php echo $this->Form->postLink('Delete',
								array('action' => 'deleteScars', $stackcar['StackCar']['ID']),
								array('confirm' => 'Are you sure?')
							)?>
							<?php echo $this->Html->link('Edit', array('action' => 'editScars', $stackcar['StackCar']['ID']));?>
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