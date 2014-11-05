<?php
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController {

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
		$this->Produto->recursive = 0;
		$this->set('produtos', $this->Paginator->paginate());
	}


	public function indexView() {
        $produtos = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $produtos;
        } else {  //Senão envia para a view padrão
            $this->set('produtos', $produtos);
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
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$this->set('produto', $this->Produto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('The produto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produto could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Produto->Usuario->find('list');
		$categories = $this->Produto->Category->find('list');
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
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('The produto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
			$this->request->data = $this->Produto->find('first', $options);
		}
		$usuarios = $this->Produto->Usuario->find('list');
		$categories = $this->Produto->Category->find('list');
		$this->set(compact('usuarios', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produto->delete()) {
			$this->Session->setFlash(__('The produto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The produto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
