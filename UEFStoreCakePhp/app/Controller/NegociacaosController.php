<?php
App::uses('AppController', 'Controller');
/**
 * Negociacaos Controller
 *
 * @property Negociacao $Negociacao
 * @property PaginatorComponent $Paginator
 */
class NegociacaosController extends AppController {

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
		$this->Negociacao->recursive = 0;
		$this->set('negociacaos', $this->Paginator->paginate());
	}

	public function negocios() {
        $negociacao = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $negociacao;
        } else {  //Senão envia para a view padrão
            $this->set('negociacaos', $negociacao);
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
		if (!$this->Negociacao->exists($id)) {
			throw new NotFoundException(__('Invalid negociacao'));
		}
		$options = array('conditions' => array('Negociacao.' . $this->Negociacao->primaryKey => $id));
		$this->set('negociacao', $this->Negociacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {

				$timestamp = strtotime("+14 days");
			$this->request->data['Negociacao']['data_final']['day'] = date('d', $timestamp);
			$this->request->data['Negociacao']['data_final']['month'] = date('m', $timestamp);
			$this->request->data['Negociacao']['data_final']['year'] = date('Y', $timestamp);	
				$this->Negociacao->create();
			if ($this->Negociacao->save($this->request->data)) {
				$this->Session->setFlash(__('negociação feita'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('The negociacao could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Negociacao->Usuario->find('list');
		$produtos = $this->Negociacao->Produto->find('list');
		$servicos = $this->Negociacao->Servico->find('list');
		$this->set(compact('usuarios', 'produtos', 'servicos'));
	}
	public function adds($userInteressado =null, $usario_id = null, $servico=null,$produto=null) {
		

		
		if ($this->request->is('post')) {

			$this->Negociacao->create();
			
			$this->request->data['Negociacao']['interessado'] = $userInteressado;
			$this->request->data['Negociacao']['usuario_id'] = $usario_id;
			
			if($produto!='null')
					$this->request->data['Negociacao']['produto_id'] = $produto;
			else
					$this->request->data['Negociacao']['produto_id'] = null;
			
			if($servico!='null')
					$this->request->data['Negociacao']['servico_id'] = $servico;
			else
					$this->request->data['Negociacao']['servico_id'] = null;
					
			
				$timestamp = strtotime("+14 days");
			$this->request->data['Negociacao']['data_final']['day'] = date('d', $timestamp);
			$this->request->data['Negociacao']['data_final']['month'] = date('m', $timestamp);
			$this->request->data['Negociacao']['data_final']['year'] = date('Y', $timestamp);	

			
			if ($this->Negociacao->save($this->request->data)) {
				$this->Session->setFlash(__('negociação feita'));
				return $this->redirect('/');
			} else {
					$this->Session->setFlash(__('negociação não feita'));
			}
		}
		
		$usuarios = $this->Negociacao->Usuario->find('list');
		$produtos = $this->Negociacao->Produto->find('list');
		$servicos = $this->Negociacao->Servico->find('list');
		$this->set(compact('usuarios', 'produtos', 'servicos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Negociacao->exists($id)) {
			throw new NotFoundException(__('Invalid negociacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Negociacao->save($this->request->data)) {
				$this->Session->setFlash(__('The negociacao has been saved.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('The negociacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Negociacao.' . $this->Negociacao->primaryKey => $id));
			$this->request->data = $this->Negociacao->find('first', $options);
		}
		$usuarios = $this->Negociacao->Usuario->find('list');
		$produtos = $this->Negociacao->Produto->find('list');
		$servicos = $this->Negociacao->Servico->find('list');
		$this->set(compact('usuarios', 'produtos', 'servicos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Negociacao->id = $id;
		if (!$this->Negociacao->exists()) {
			throw new NotFoundException(__('Invalid negociacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Negociacao->delete()) {
			$this->Session->setFlash(__('The negociacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The negociacao could not be deleted. Please, try again.'));
		}
		return $this->redirect('/');
	}
}
