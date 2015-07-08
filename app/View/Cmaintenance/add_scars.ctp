<div class="container-fluid">
	  <div class="row row-offcanvas row-offcanvas-left">

		 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
		   
			<ul class="nav nav-sidebar">
			  <li>
				<?php echo $this->Html->link('Clients', array('controller' => 'cmaintenance', 'action' => 'clients'));?>
			  </li>
			  <li  class="active">
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


				<h1>Add Stack Car</h1>
					<?php
					echo $this->Form->create('StackCar');
					echo $this->Form->input('Description');
					echo $this->Form->input('Ton');
					echo $this->Form->input('Length');
					echo $this->Form->input('Weight');
					//echo $this->Form->input('body', array('rows' => '3'));
					echo $this->Form->end('Save Stack Car');
					?>

			</div><!--/row-->
		</div>
  
</div><!--/.container-->
