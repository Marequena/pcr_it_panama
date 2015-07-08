<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Panamá Canal Railway Company');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
//		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery-ui');	
		//echo $this->Html->script('application');		
		
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('jquery-ui.min');
		echo $this->Html->css('jquery-ui.theme');
		echo $this->Html->css('jquery-ui.theme.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('styles.css');
		echo $this->Html->css('LoginStyleSheet.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Panamá Canal Railway Company</a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				<li>
					<?php echo $this->Html->link('Maintenance', array('controller' => 'cmaintenance', 'action' => 'index'));?>
				</li>
				<li>
					<?php echo $this->Html->link('Special Processes', array('controller' => 'cprocesses', 'action' => 'index'));?>
				</li>
				<li>
					<?php echo $this->Html->link('Querys', array('controller' => 'cquerys', 'action' => 'index'));?>
				</li>
				<li>
					<?php echo $this->Html->link('Reports', array('controller' => 'creports', 'action' => 'index'));?>
				</li>
				<li>
					<?php echo $this->Html->link('Security', array('controller' => 'groups', 'action' => 'index'));?>
				</li>
			  </ul>
			</div>
		  </div>
	</nav>

	<div id="container-fluid">
  
			  


					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
			 
	</div><!--/.container-->

	<footer>
	  <p class="pull-right">©2015 Panamá Canal Railway Company</p>
	</footer>

	<?php //echo $this->element('sql_dump'); ?>
	
</body>
</html>
