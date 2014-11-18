<?php
App::uses('AppController', 'Controller');
/**
 * Terceiros Controller
 *
 * @property Terceiro $Terceiro
 * @property PaginatorComponent $Paginator
 */
class TerceirosController extends AppController {

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
		$this->Terceiro->recursive = 0;
		$this->set('terceiros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Terceiro->exists($id)) {
			throw new NotFoundException(__('Invalid terceiro'));
		}
		$options = array('conditions' => array('Terceiro.' . $this->Terceiro->primaryKey => $id));
		$this->set('terceiro', $this->Terceiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Terceiro->create();
			if ($this->Terceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The terceiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terceiro could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Terceiro->Category->find('list');
		$usuarios = $this->Terceiro->Usuario->find('list');
		$this->set(compact('categories', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Terceiro->exists($id)) {
			throw new NotFoundException(__('Invalid terceiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Terceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The terceiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terceiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Terceiro.' . $this->Terceiro->primaryKey => $id));
			$this->request->data = $this->Terceiro->find('first', $options);
		}
		$categories = $this->Terceiro->Category->find('list');
		$usuarios = $this->Terceiro->Usuario->find('list');
		$this->set(compact('categories', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Terceiro->id = $id;
		if (!$this->Terceiro->exists()) {
			throw new NotFoundException(__('Invalid terceiro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Terceiro->delete()) {
			$this->Session->setFlash(__('The terceiro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The terceiro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
