<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

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
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        	if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
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
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if($this->request->is('get')) {
            throw new MethodNotAllowedException('Você não tem permissão para deletar este usuário!');
        }
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

/**
 * beforeFilter
 * Método herdado de AppController, define os comandos que podem ser usados por padrão pelo usuário.
 */
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('login', 'add');      
	}
	
/**
 * isAuthorized
 * @var user Usuário
 * Método que define um conjunto de objetos de autorização necessários para autorizar usuários em cada pedido.
 */

	public function isAuthorized($user)
	{
		if($user['role'] == 'admin')
		{
			return TRUE;
		}
		if(in_array($this->action, array('edit', 'delete')))
		{
			if($user['id'] != $this->request->params['pass'][0])
			{
				return FALSE;
			}
		}
		return TRUE;
	}

/**
 * login
 * Método de login.
 * Chama o método do componente Auth de efetuar login.
 * Se for executado com sucesso, redireciona a página usando o redirect() do Auth, definido no AppController.
 * Retorna mensagem de erro se houver algum erro.
 */

	public function login()
	{
		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Seu usuário e/ou senha está incorreto.');
			}
		}
	}

/**
 * logout
 * Método de logout.
 * Redireciona a página usando o redirect() do Auth, definido no AppController.
 */

	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}