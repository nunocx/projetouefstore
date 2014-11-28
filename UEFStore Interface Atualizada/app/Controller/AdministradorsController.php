<?php
App::uses('AppController', 'Controller');
/**
 * Administradors Controller
 *
 * @property Administrador $Administrador
 * @property PaginatorComponent $Paginator
 */
class AdministradorsController extends AppController {

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
		$this->Administrador->recursive = 0;
		$this->set('administradors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Administrador->exists($id)) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		$options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
		$this->set('administrador', $this->Administrador->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Administrador->create();
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('The administrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The administrador could not be saved. Please, try again.'));
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
		if (!$this->Administrador->exists($id)) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Administrador->save($this->request->data)) {
				$this->Session->setFlash(__('The administrador has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The administrador could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Administrador.' . $this->Administrador->primaryKey => $id));
			$this->request->data = $this->Administrador->find('first', $options);
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
		$this->Administrador->id = $id;
		if (!$this->Administrador->exists()) {
			throw new NotFoundException(__('Invalid administrador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Administrador->delete()) {
			$this->Session->setFlash(__('The administrador has been deleted.'));
		} else {
			$this->Session->setFlash(__('The administrador could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
