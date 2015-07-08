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
						<?php echo $this->Html->link('Read Excel Files', array('controller' => 'cprocesses', 'action' => 'dataexcel'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning', array('controller' => 'cprocesses', 'action' => 'cargoplan'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning Excel', array('controller' => 'cprocesses', 'action' => 'cargoplanxls'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Load PLan', array('controller' => 'LoadPlans', 'action' => 'index'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Change Train Number', array('controller' => 'cprocesses', 'action' => 'changetrain'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Change Status', array('controller' => 'cprocesses', 'action' => 'changestatus'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Logs', array('controller' => 'cprocesses', 'action' => 'logs'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Delete Containers', array('controller' => 'cprocesses', 'action' => 'delcontainer'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cancel Containers', array('controller' => 'cprocesses', 'action' => 'cancelcontainer'));?>
					  </li>
					</ul>
					<ul class="nav nav-sidebar">
					  <li><a href="">Main</a></li>
					  
					</ul>
					
				  
				</div><!--/span-->
				
				<div class="col-sm-9 col-md-10 main">
				  
				 
				  
				  <h1 class="page-header">
					
				  </h1>

				  <div class="row placeholders">
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>

				  </div>
			  
				 
			  </div><!--/row-->
			</div>
  
</div><!--/.container-->

<footer>
  <p class="pull-right">©2014 Company</p>
</footer>
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>