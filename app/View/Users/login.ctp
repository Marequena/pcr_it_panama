<!DOCTYPE html>
<html lang="en">
	<head>		
        <style type="text/css">
            .navbar {
                display: none !important;
             }
            .col-md-9 {
               margin-top:20%;      
            }
        </style>         
	</head>
	<body class="body-bg">
            <div class="navbar"></div>
            <div class="log-main">
                    <img alt="Logo" src="../img/logo1.jpg"   />
                    <div class="log-box">	
                    <div class="container-fluid" >
                            <div class="row row-offcanvas row-offcanvas-left">
                                    <div class="col-md-9 ">
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
                    </div>
              
            </div><!--/.container-->
</div>
</html>
