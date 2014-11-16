<?php
App::uses('AppController', 'Controller');
/**
 * Mensagems Controller
 *
 * @property Mensagem $Mensagem
 * @property PaginatorComponent $Paginator
 */
class MensagemsController extends AppController {

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
		$this->Mensagem->recursive = 0;
		$this->set('mensagems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mensagem->exists($id)) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		$options = array('conditions' => array('Mensagem.' . $this->Mensagem->primaryKey => $id));
		$this->set('mensagem', $this->Mensagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mensagem->create();
			if ($this->Mensagem->save($this->request->data)) {
				$this->Session->setFlash(__('The mensagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensagem could not be saved. Please, try again.'));
			}
		}
		$administradors = $this->Mensagem->Administrador->find('list');
		$usuarios = $this->Mensagem->Usuario->find('list');
		$this->set(compact('administradors', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mensagem->exists($id)) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mensagem->save($this->request->data)) {
				$this->Session->setFlash(__('The mensagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mensagem.' . $this->Mensagem->primaryKey => $id));
			$this->request->data = $this->Mensagem->find('first', $options);
		}
		$administradors = $this->Mensagem->Administrador->find('list');
		$usuarios = $this->Mensagem->Usuario->find('list');
		$this->set(compact('administradors', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mensagem->id = $id;
		if (!$this->Mensagem->exists()) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mensagem->delete()) {
			$this->Session->setFlash(__('The mensagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mensagem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
