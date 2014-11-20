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


	
					//echo date('d', $timestamp); 
		if ($this->request->is('post')) {
			
			$this->request->data['Produto']['Data_Publicacao']['day'] = date('d');
			$this->request->data['Produto']['Data_Publicacao']['month'] = date('m');
			$this->request->data['Produto']['Data_Publicacao']['year'] = date('Y');	
				$timestamp = strtotime("+30 days");
			$this->request->data['Produto']['Data_Vencimento']['day'] = date('d', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['month'] = date('m', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['year'] = date('Y', $timestamp);	
			
			$this->Produto->create();
			
			

			//echo date('d', $timestamp).'/'.date('m', $timestamp).'/'.date('Y', $timestamp);
			//debug($this->request->data['Produto']['Data_Vencimento'])or die ();
			if ($this->Produto->save($this->request->data)) {
				//$this->Session->setFlash(__('The produto has been saved.'));

				$id_ = $this->Produto->id;
				return $this->redirect(array('action' => 'etapa2/'.$id_));
			} else {
				$this->Session->setFlash(__('The produto could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Produto->Usuario->find('list');
		$categories = $this->Produto->Category->find('list');
		$this->set(compact('usuarios', 'categories'));
	}
	public function etapa2($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid Produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('Produto foi salvo'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Houve um erro, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
			$this->request->data = $this->Produto->find('first', $options);
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
