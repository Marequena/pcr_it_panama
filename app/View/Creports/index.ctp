<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Dashboard with Off-canvas Sidebar</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>


<div class="container-fluid">
    			  <div class="row row-offcanvas row-offcanvas-left">
				
				 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
				   
					<ul class="nav nav-sidebar">
					  <li class="active">
						<?php echo $this->Html->link('Pending Containers', array('controller' => 'creports', 'action' => 'pendcontainers'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Moved Containers', array('controller' => 'creports', 'action' => 'movecontainers'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Operations History', array('controller' => 'creports', 'action' => 'cargohistory'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Cargo Planning', array('controller' => 'creports', 'action' => 'cargoplan'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Hot Cutoff', array('controller' => 'creports', 'action' => 'cutoff'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Train Log', array('controller' => 'creports', 'action' => 'trainlog'));?>
					  </li>
					  <li>
						<?php echo $this->Html->link('Load Plan', array('controller' => 'creports', 'action' => 'loadplan'));?>
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