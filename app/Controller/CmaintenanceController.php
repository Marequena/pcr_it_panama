<?php
class CmaintenanceController extends AppController {
    var $name = 'Cmaintenance';
	var $paginate = array(
	'limit' => 5,
	'order' => array(
	'ID' => 'asc'
	)
	);
    // $uses is where you specify which models this controller uses
    var $uses = array('Client','StackCar','Locomotive');
    		public function beforeFilter() {
		parent::beforeFilter();

		
		$this->Auth->allow();
	}

        
	public $components = array('Session');

	
	
	//Clients Controller 
	
	public function index() {
			
            $data = $this->paginate('Client');
            $this->set(compact('client_list'));
			$this->set('client_list', $data);
		//$this->set('client_list', $this->Client->find('all'));
	}

	public function clients() {
		$this->set('client_list', $this->Client->find('all'));
	}

	/* VIEW */////
     public function viewClients($id) {
        $this->Clients->id = $id;
        $this->set('client', $this->Client->read());
    }
	
	/* ADD */////
    public function addClients() {
        if ($this->request->is('post')) {
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash('Your clients has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	
	/* EDIT */////
    public function editClients($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid clients'));
		}
		$client = $this->Client->findById($id);
		if (!$client) {
			
			throw new NotFoundException(__('this Clients no exists'));
		}
		else
		{
			$this->set('client_v',$client);
		}
		
		if ($this->request->is('post')) {
			$this->Client->id = $id;
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('Your Client has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your.'));
		}

		if (!$this->request->data) {
			$this->request->data = $client;
		}
	}
	
	/* DELETE */////
    function deleteClients($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Client->delete($id)) {
            $this->Session->setFlash('The clients with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
	
	//end clients controller
	
	//StackCars Controller 
	
	public function stackcars() {
		 
		 //$this->set('scar_list', $this->StackCar->find('all'));
            $data = $this->paginate('StackCar');
            $this->set(compact('scar_list'));
			$this->set('scar_list', $data);
		
	}



	/* VIEW */////
     public function viewSCars($id) {
        $this->StackCar->id = $id;
        $this->set('stackcar', $this->StackCar->read());
    }
	
	/* ADD */////
    public function addSCars() {
        if ($this->request->is('post')) {
            if ($this->StackCar->save($this->request->data)) {
                $this->Session->setFlash('Your Stack Car has been saved.');
                $this->redirect(array('action' => 'stackcars'));
            }
        }
    }
	
	
	/* EDIT */////
    public function editSCars($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Stack Car'));
		}
		$stackcar = $this->StackCar->findById($id);
		if (!$stackcar) {
			
			throw new NotFoundException(__('this Stack Car no exists'));
		}
		else
		{
			$this->set('stackcar_v',$stackcar);
		}
		
		if ($this->request->is('post')) {
			$this->StackCar->id = $id;
			if ($this->StackCar->save($this->request->data)) {
				$this->Session->setFlash(__('Your Stack Car has been updated.'));
				return $this->redirect(array('action' => 'stackcars'));
			}
			$this->Session->setFlash(__('Unable to update your.'));
		}

		if (!$this->request->data) {
			$this->request->data = $stackcar;
		}
	}
	
	/* DELETE */////
    function deleteSCars($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->StackCar->delete($id)) {
            $this->Session->setFlash('The Stack Car with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'stackcars'));
        }
    }
	
	//end stackcars controller

	//locomotive Controller 
	
	public function locomotive() {
		 
		 //$this->set('scar_list', $this->StackCar->find('all'));
            $data = $this->paginate('Locomotive');
            $this->set(compact('locom_list'));
			$this->set('locom_list', $data);
		
	}



	/* VIEW */////
     public function viewlocomotives($id) {
        $this->Locomotive->id = $id;
        $this->set('locomotive', $this->Locomotive->read());
    }
	
	/* ADD */////
    public function addLocomotives() {
        if ($this->request->is('post')) {
            if ($this->Locomotive->save($this->request->data)) {
                $this->Session->setFlash('Your Locomotive has been saved.');
                $this->redirect(array('action' => 'locomotive'));
            }
        }
    }
	
	
	/* EDIT */////
    public function editLocomotives($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid Locomotive'));
		}
		$locomotive = $this->Locomotive->findById($id);
		if (!$locomotive) {
			
			throw new NotFoundException(__('this Locomotive Car no exists'));
		}
		else
		{
			$this->set('locomotive_v',$locomotive);
		}
		
		if ($this->request->is('post')) {
			$this->Locomotive->id = $id;
			if ($this->Locomotive->save($this->request->data)) {
				$this->Session->setFlash(__('Your Locomotive has been updated.'));
				return $this->redirect(array('action' => 'locomotive'));
			}
			$this->Session->setFlash(__('Unable to update your.'));
		}

		if (!$this->request->data) {
			$this->request->data = $locomotive;
		}
	}
	
	/* DELETE */////
    function deleteLocomotives($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Locomotive->delete($id)) {
            $this->Session->setFlash('The Locomotive with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'locomotive'));
        }
    }
	
	//end locomotive controller
	
}
