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
				return $this->redirect('/');
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


		if ($this->request->is('post')) {
			$this->Comentario->create();

		$this->request->data['Comentario']['produto_id'] = null;
		$this->request->data['Comentario']['servico_id'] = null;

		if($id_prod!=null)
			$this->request->data['Comentario']['produto_id'] = $id_prod;
		if($id_serv!=null)
			$this->request->data['Comentario']['servico_id'] = $id_serv;
		
			$this->request->data['Comentario']['usuario_id'] = $this->Auth->user('id');
				//debug($this->request->data) or die ();
			if($id_prod == $id_serv && $id_serv == null)
			{
				$this->Session->setFlash(__('Não há produto ou serviço selecionado para o comentario.'));
			}			
			elseif ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('Anuncio Comentado com sucesso.'));
				return $this->redirect('/');
			}
			 else {
				$this->Session->setFlash(__('Comentario não pode ser enviado, tente novamente'));
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
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	
	}
}
