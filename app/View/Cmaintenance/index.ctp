<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">

			<div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
			   
				<ul class="nav nav-sidebar">
				  <li class="active">
					<?php echo $this->Html->link('Clients', array('controller' => 'cmaintenance', 'action' => 'index'));?>
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
			<div id="dialogModal">
				<!-- the external content is loaded inside this tag -->
				<div class="contentWrap"></div>
			</div>
			<div class="col-sm-9 col-md-10 main">


				<h2 class="sub-header">Clients</h2>
				<?php 
				echo $this->Html->link('Add Client', array('controller' => 'cmaintenance', 'action' => 'addClients'));
				?>
				<div class="table-responsive">
					<table class="table table-striped">
							
							<tr>
								<th><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
								<th><?php echo $this->Paginator->sort('Name', 'Name'); ?></th>
								<th><?php echo $this->Paginator->sort('Abbreviation', 'Abbreviation'); ?></th>
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
				</div>
			</div><!--/row-->
			<?php echo $this->Paginator->numbers(); ?>    
			<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
			<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>    
			<?php echo $this->Paginator->counter(); ?>
		</div>
  
</div><!--/.container-->