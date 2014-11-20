<?php
App::uses('AppController', 'Controller');
/**
 * Servicos Controller
 *
 * @property Servico $Servico
 * @property PaginatorComponent $Paginator
 */
class ServicosController extends AppController {

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
		
		$servicos = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $servicos;
        } else {  //Senão envia para a view padrão
            $this->set('servicos', $servicos);
        }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid servico'));
		}
		$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
		$this->set('servico', $this->Servico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Servico->create();
			if ($this->Servico->save($this->request->data)) {
				//$this->Session->setFlash(__('The servico has been saved.'));
				$id_ = $this->Servico->id;
				return $this->redirect(array('action' => 'etapa2/'.$id_));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Servico->Usuario->find('list');
		$categories = $this->Servico->Category->find('list');
		$this->set(compact('usuarios', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Servico->save($this->request->data)) {
				$this->Session->setFlash(__('The servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
			$this->request->data = $this->Servico->find('first', $options);
		}
		$usuarios = $this->Servico->Usuario->find('list');
		$categories = $this->Servico->Category->find('list');
		$this->set(compact('usuarios', 'categories'));
	}

	public function etapa2($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid Servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Servico->save($this->request->data)) {
				$this->Session->setFlash(__('Servico foi salvo'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Houve um erro, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
			$this->request->data = $this->Servico->find('first', $options);
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
		$this->Servico->id = $id;
		if (!$this->Servico->exists()) {
			throw new NotFoundException(__('Invalid servico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Servico->delete()) {
			$this->Session->setFlash(__('The servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
