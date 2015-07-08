<div class="container-fluid">
	  <div class="row row-offcanvas row-offcanvas-left">

		 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
		   
			<ul class="nav nav-sidebar">
			  <li class="active">
				<?php echo $this->Html->link('Clients', array('controller' => 'cmaintenance', 'action' => 'clients'));?>
			  </li>
			  <li>
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


				<h1>Add Client</h1>
					<?php
					echo $this->Form->create('Client');
					echo $this->Form->input('Name');
					echo $this->Form->input('Abbreviation');
					//echo $this->Form->input('body', array('rows' => '3'));
					echo $this->Form->end('Save Client');
					?>

			</div><!--/row-->
		</div>
  
</div><!--/.container-->
