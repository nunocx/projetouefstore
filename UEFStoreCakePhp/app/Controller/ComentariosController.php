<?php
App::uses('AppController', 'Controller');
/**
 * Comentarios Controller
 *
 * @property Comentario $Comentario
 * @property PaginatorComponent $Paginator
 */
class ComentariosController extends AppController {

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
		
		$comentario = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $comentario;
        } else {  //Senão envia para a view padrão
            $this->set('comentarios', $comentario);
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
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
		$this->set('comentario', $this->Comentario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$servicos = $this->Comentario->Servico->find('list');
		$produtos = $this->Comentario->Produto->find('list');
		$this->set(compact('usuarios', 'servicos', 'produtos'));	
	}
	public function adds($id_user = null, $id_prod = null,$id_serv = null) {
		//$this->request->data['Comentario']['servico_id'] = $id_serv;
		//$this->request->data['Comentario']['produto_id'] = $id_prod;
		//$this->request->data['Comentario']['usuario_id'] = $id_user;
		if($id_serv != null)
		echo $id_user .$id_prod .$id_serv;
		
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$servicos = $this->Comentario->Servico->find('list');
		$produtos = $this->Comentario->Produto->find('list');
		$this->set(compact('usuarios', 'servicos', 'produtos'));	
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comentario->exists($id)) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('The comentario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comentario.' . $this->Comentario->primaryKey => $id));
			$this->request->data = $this->Comentario->find('first', $options);
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$servicos = $this->Comentario->Servico->find('list');
		$produtos = $this->Comentario->Produto->find('list');
		$this->set(compact('usuarios', 'servicos', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Invalid comentario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comentario->delete()) {
			$this->Session->setFlash(__('The comentario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comentario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
