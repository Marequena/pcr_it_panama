<?php
class PCRController extends AppController {
 
 public function index() {
			$this->redirect(array('controller' => 'cmaintenance','action' => 'index'));
	}

}
