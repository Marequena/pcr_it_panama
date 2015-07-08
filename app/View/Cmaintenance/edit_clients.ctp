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

			
				<h1>Edit Client</h1>
					<?php
					
						echo $this->Form->create('Client');
						echo $this->Form->input('Name',array('default'=>$client_v['Client']['Name']));
						echo $this->Form->input('Abbreviation',array('default'=>$client_v['Client']['Abbreviation']));
						echo $this->Form->input('ID', array('type' => 'hidden','default'=>$client_v['Client']['ID']));
						echo $this->Form->end('Save Client');
					?>

			</div><!--/row-->
		</div>
  
</div><!--/.container-->

