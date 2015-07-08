<?php
class CprocessesController extends AppController {
 
    public $name = 'Cprocesses';
    public $components = array('Session');

	var $uses = array('importdatafile');
	 
	var $paginate = array(
	'limit' => 5,
	'order' => array(
	'ID' => 'asc'
	)
	);
	
		public function beforeFilter() {
		parent::beforeFilter();

		
		$this->Auth->allow();
	}
	
	 public function index() {
		$this->redirect(array('action' => 'dataexcel'));
	}

	 public function cancelcontainer() {
		$data = $this->paginate('importdatafile');
		$this->set(compact('importdatafile'));
		$this->set('contaniers', $data);
		
		
	}
	
 public function dataexcel() {
	 set_time_limit( 300 );
	 if(isset($_POST["Import"]))
		{
							$filename=$_FILES["file"]["tmp_name"];
							$uploaddir = 'uploads/';
							$uploadfile = $uploaddir.basename($_FILES['file']['name']);
							
				            
							echo '<pre>';
							if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
							} else {
								
							}
							
							App::import('Vendor', 'reader');
							$data = new Spreadsheet_Excel_Reader();
							$data->setOutputEncoding('CP1251');
							$data->read($uploadfile);
							//echo $data->sheets[0]['numRows'];
							$row = array();
							$allrow = array();
							for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
								 		
								for ($j = 2; $j <= $data->sheets[0]['numCols']; $j++) {
									if( isset($data->sheets[0]['cells'][$i][$j]) && ( $data->sheets[0]['cells'][$i][$j] != "" ) ){ 
										//echo("<td>".$data->sheets[0]['cells'][$i][$j] ."</td>");
										//echo("<td>".$this->Form->input('import.id', array('label'=>false, 'div'=>false, 'id'=>"import{$i}id", 'name'=>"data[import][$i][id]", 'value'=>$data->sheets[0]['cells'][$i][$j]))."</td>");
										
										$row = array(strtolower($data->sheets[0]['cells'][1][$j])=>$data->sheets[0]['cells'][$i][$j]) + $row; 
									}
									else
									{
										$row = $row + array($data->sheets[0]['cells'][1][$j]=>'') ; 
									}
									
								}
								pr($row);
								$params = array('conditions' => array('importdatafile.container' => $row['container']));
								$res = $this->importdatafile->find('first', $params);
								if (count($res) == 0) 
								{
									$this->importdatafile->create();
									$this->importdatafile->save($row);
								}
								//$allrow = array($i-1 => $allrow);
							}
							//unlink($uploadfile);
							$this->set('importdatafile', $this->importdatafile->find('all'));
							$this->Session->setFlash('Your LoadPlan has been saved.');
							$this->redirect(array('action' => 'dataexcel'));

			
			
		}
	 
	

	}
	
	/* DELETE CONTAINER*/////
    function deletecontainer($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->importdatafile->delete($id)) {
            $this->Session->setFlash('The container with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'cancelcontainer'));
        }
    }

	/* CANCEL CONTAINER*/////
    function cancel($id) {
		
			$this->importdatafile->updateAll(
				array('cancel' => true),
				array('ID =' => $id)
			);
            $this->Session->setFlash('The container with id: ' . $id . ' has been canceled.');
            $this->redirect(array('action' => 'cancelcontainer'));
        
    }

		/* CANCEL CONTAINER*/////
    function cancelAll() {
		
			$this->importdatafile->updateAll(
				array('cancel' => true)
			);
            $this->Session->setFlash('The container with id: ' . $id . ' has been active.');
            $this->redirect(array('action' => 'cancelcontainer'));
        
    }

	
	/* CANCEL CONTAINER*/////
    function active($id) {
		
			$this->importdatafile->updateAll(
				array('cancel' => false),
				array('ID =' => $id)
			);
            $this->Session->setFlash('The container with id: ' . $id . ' has been canceled.');
            $this->redirect(array('action' => 'cancelcontainer'));
        
    }
	

}
