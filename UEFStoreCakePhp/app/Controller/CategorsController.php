<?php
App::uses('AppController', 'Controller');
/**
 * Categors Controller
 *
 * @property Categor $Categor
 * @property PaginatorComponent $Paginator
 */
class CategorsController extends AppController {

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
		$this->Categor->recursive = 0;
		$this->set('categors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categor->exists($id)) {
			throw new NotFoundException(__('Invalid categor'));
		}
		$options = array('conditions' => array('Categor.' . $this->Categor->primaryKey => $id));
		$this->set('categor', $this->Categor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categor->create();
			if ($this->Categor->save($this->request->data)) {
				$this->Session->setFlash(__('The categor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categor could not be saved. Please, try again.'));
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
		if (!$this->Categor->exists($id)) {
			throw new NotFoundException(__('Invalid categor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categor->save($this->request->data)) {
				$this->Session->setFlash(__('The categor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Categor.' . $this->Categor->primaryKey => $id));
			$this->request->data = $this->Categor->find('first', $options);
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
		$this->Categor->id = $id;
		if (!$this->Categor->exists()) {
			throw new NotFoundException(__('Invalid categor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Categor->delete()) {
			$this->Session->setFlash(__('The categor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
