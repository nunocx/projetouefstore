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
			
		
			
			$this->Produto->create();
			$this->request->data['Produto']['usuario_id'] = $this->Auth->user('id');
			$this->request->data['Produto']['Data_Publicacao']['day'] = date('d');
			$this->request->data['Produto']['Data_Publicacao']['month'] = date('m');
			$this->request->data['Produto']['Data_Publicacao']['year'] = date('Y');	
				$timestamp = strtotime("+30 days");
			$this->request->data['Produto']['Data_Vencimento']['day'] = date('d', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['month'] = date('m', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['year'] = date('Y', $timestamp);	
			
			

			//echo date('d', $timestamp).'/'.date('m', $timestamp).'/'.date('Y', $timestamp);
			//debug($this->request->data['Produto']['Data_Vencimento'])or die ();
			if ($this->Produto->save($this->request->data)) {
				//$this->Session->setFlash(__('The produto has been saved.'));

				$id_ = $this->Produto->id;
				return $this->redirect('/');

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
				return $this->redirect('/');
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
				$this->Session->setFlash(__('O Produto foi editado.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('O Produto não pode ser editado, tente novamente.'));
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
			$this->Session->setFlash(__('Produto Deletado.'));
		} else {
			$this->Session->setFlash(__('Produto não foi deletado, tente novamente'));
		}
	return $this->redirect('/');
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function search($termo){
		$busca = "SELECT * FROM  `produtos` WHERE `produtos`.`name` LIKE '%".$termo."%' AND `produtos`.`Bloqueado` = 0 AND `produtos`.`Expirado` = 0";
//debug($busca) or die();
		if ($termo = NULL) {
			throw new NotFoundException(__('Invalid busca'));
		}
		$produtos = $this->Produto->query($busca);
	 	return $produtos;
	}
}
