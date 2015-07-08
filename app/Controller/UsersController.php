<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				return $this->flash(__('The user has been saved.'), array('action' => 'index'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				return $this->flash(__('The user has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		// Verificar si sus permisos de grupo han cambiado
		$oldgroupid = $this->User->field('group_id');
		if ($oldgroupid !== $this->data['User']['group_id']) {
			$aro =& $this->Acl->Aro;
			$user = $aro->findByForeignKeyAndModel($this->data['User']['id'], 'User');
			$group = $aro->findByForeignKeyAndModel($this->data['User']['group_id'], 'Group');

			// Guardar en la tabla ARO
			$aro->id = $user['Aro']['id'];
			$aro->save(array('parent_id' => $group['Aro']['id']));
		}
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			return $this->flash(__('The user has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The user could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
	
	
	function login() {			
        if ($this->request->is('post')) {
			$this->Auth->login($this->request->data);
			
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
        $this->Session->setFlash(__('Your username or password was incorrect.'));
    }
}

	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('initDB'); // We can remove this line after we're finished
	}

	public function initDB() {
			
		$group = $this->User->Group;
		pr($group);
		
		// Allow admins to everything
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');
		
		// allow managers to posts and widgets
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Cmaintenance');
		$this->Acl->allow($group, 'controllers/Cprocesses');
		$this->Acl->allow($group, 'controllers/LoadPlans');
		$this->Acl->allow($group, 'controllers/groups');
		$this->Acl->allow($group, 'controllers/users');

		// allow users to only add and edit on posts and widgets
		$group->id = 3;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Cmaintenance');
		// allow basic users to log out
		$this->Acl->allow($group, 'controllers/users/logout');

		// we add an exit to avoid an ugly "missing views" error message
		echo "all done";
		exit;
	}
	   

}
