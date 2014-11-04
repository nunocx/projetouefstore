<?php
App::uses('AppController', 'Controller');
/**
 * Anuncioterceiros Controller
 *
 * @property Anuncioterceiro $Anuncioterceiro
 * @property PaginatorComponent $Paginator
 */
class AnuncioterceirosController extends AppController {

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
		$this->Anuncioterceiro->recursive = 0;
		$this->set('anuncioterceiros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anuncioterceiro->exists($id)) {
			throw new NotFoundException(__('Invalid anuncioterceiro'));
		}
		$options = array('conditions' => array('Anuncioterceiro.' . $this->Anuncioterceiro->primaryKey => $id));
		$this->set('anuncioterceiro', $this->Anuncioterceiro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Anuncioterceiro->create();
			if ($this->Anuncioterceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncioterceiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncioterceiro could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Anuncioterceiro->Category->find('list');
		$administradors = $this->Anuncioterceiro->Administrador->find('list');
		$this->set(compact('categories', 'administradors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Anuncioterceiro->exists($id)) {
			throw new NotFoundException(__('Invalid anuncioterceiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Anuncioterceiro->save($this->request->data)) {
				$this->Session->setFlash(__('The anuncioterceiro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anuncioterceiro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anuncioterceiro.' . $this->Anuncioterceiro->primaryKey => $id));
			$this->request->data = $this->Anuncioterceiro->find('first', $options);
		}
		$categories = $this->Anuncioterceiro->Category->find('list');
		$administradors = $this->Anuncioterceiro->Administrador->find('list');
		$this->set(compact('categories', 'administradors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Anuncioterceiro->id = $id;
		if (!$this->Anuncioterceiro->exists()) {
			throw new NotFoundException(__('Invalid anuncioterceiro'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Anuncioterceiro->delete()) {
			$this->Session->setFlash(__('The anuncioterceiro has been deleted.'));
		} else {
			$this->Session->setFlash(__('The anuncioterceiro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
