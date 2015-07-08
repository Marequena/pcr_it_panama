<?php
App::uses('AppController', 'Controller');
/**
 * Importdatafiles Controller
 *
 * @property Importdatafile $Importdatafile
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 */
class ImportdatafilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'N');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Importdatafile->recursive = 0;
		$this->set('importdatafiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Importdatafile->exists($id)) {
			throw new NotFoundException(__('Invalid importdatafile'));
		}
		$options = array('conditions' => array('Importdatafile.' . $this->Importdatafile->primaryKey => $id));
		$this->set('importdatafile', $this->Importdatafile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Importdatafile->create();
			if ($this->Importdatafile->save($this->request->data)) {
				return $this->flash(__('The importdatafile has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Importdatafile->exists($id)) {
			throw new NotFoundException(__('Invalid importdatafile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Importdatafile->save($this->request->data)) {
				return $this->flash(__('The importdatafile has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Importdatafile.' . $this->Importdatafile->primaryKey => $id));
			$this->request->data = $this->Importdatafile->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Importdatafile->id = $id;
		if (!$this->Importdatafile->exists()) {
			throw new NotFoundException(__('Invalid importdatafile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Importdatafile->delete()) {
			return $this->flash(__('The importdatafile has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The importdatafile could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
