<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-sm-9 col-md-10 main">
				  <h2>Login</h2>
				<?php
				echo $this->Form->create('User', array('action' => 'login'));
				echo $this->Form->inputs(array(
					'legend' => __('Login'),
					'username',
					'password'
				));
				echo $this->Form->end('Login');
				?>
			</div><!--/row-->
		</div>
  
	</div><!--/.container-->

</html>
