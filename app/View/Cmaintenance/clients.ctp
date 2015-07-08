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


				<h1>Clients</h1>
				<?php 
				echo $this->Html->link('Add Client', array('controller' => 'cmaintenance', 'action' => 'addClients'));
				?>
				<table class='table table-striped'>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Abbreviation</th>
						<th>Actions</th>
					</tr>

					<?php foreach ($client_list as $client): ?>
					<tr>
						<td><?php echo $client['Client']['ID'];  ?></td>
						<td>
							<?php echo $this->Html->link($client['Client']['Name'], 
									array('action' => 'view', $client['Client']['ID']));?>

						</td>
						<td><?php echo $client['Client']['Abbreviation']; ?></td>
						<td>
							<?php echo $this->Form->postLink('Delete',
								array('action' => 'deleteClients', $client['Client']['ID']),
								array('confirm' => 'Are you sure?')
							)?>
							<?php echo $this->Html->link('Edit', array('action' => 'editClients', $client['Client']['ID']));?>
						</td>

					   
					</tr>
					<?php endforeach; ?>

				</table>
			</div><!--/row-->
		</div>
  
</div><!--/.container-->