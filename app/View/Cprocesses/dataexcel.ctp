

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
 					  <li >
						<?php echo $this->Html->link('Manager Containers', array('controller' => 'cprocesses', 'action' => 'cancelcontainer'));?>
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
				  
				  <form enctype="multipart/form-data" method="post" role="form">
					<div class="form-group">
						<label for="exampleInputFile"> </label>
						<input type="file" name="file" id="file" size="10">
						<p class="help-block">Select File, Only Excel</p>
						<button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
					</div>
					<?php 
					
						if(isset($_POST["Import"]))
						{
							
							$filename=$_FILES["file"]["tmp_name"];
							$uploaddir = 'uploads/';
							$uploadfile = $uploaddir.basename($_FILES['file']['name']);
							
				            
							echo '<pre>';
							//if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
							//	echo "El archivo es válido y fue cargado exitosamente.\n";
							//	echo '<button type="submit" class="btn btn-default" name="Load" value="Load">Load File</button>';
							//} else {
							//	echo "¡Posible ataque de carga de archivos!\n";
							//}
							
							App::import('Vendor', 'reader');
							$data = new Spreadsheet_Excel_Reader();
							$data->setOutputEncoding('CP1251');
							$data->read($_FILES["file"]["tmp_name"]);
							//echo $data->sheets[0]['numRows'];
							echo("<table class='table table-striped'>");
							for ($i = 2; $i < $data->sheets[0]['numRows']; $i++) {
								
								echo("<tr>");
								for ($j = 2; $j < $data->sheets[0]['numCols']; $j++) {
									if( isset($data->sheets[0]['cells'][$i][$j]) && ( $data->sheets[0]['cells'][$i][$j] != "" ) ){ 
										//echo("<td>".$data->sheets[0]['cells'][$i][$j] ."</td>");
										echo("<td>".$this->Form->input('import.id', array('label'=>false, 'div'=>false, 'id'=>"import{$i}id", 'name'=>"data[import][$i][id]", 'value'=>$data->sheets[0]['cells'][$i][$j]))."</td>");
									}
								}
								echo("</tr>");
								
							}
							echo("</table>");
							unlink($uploadfile);
						}
					?>
					
					</form>
				
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>

				  </div>
			  
				 
			  </div><!--/row-->
			</div>
  
</div><!--/.container-->
