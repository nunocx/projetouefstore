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
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function buscaProdutos($comando) {
		$resultado = $this->Produto->query($comando); //fazer busca no banco de dados
		//debug($resultado) or die();
		return $resultado;
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

	public function attStatusProdutos()
	{
			$sql = "SELECT * FROM `u961758316_uefs`.`produtos`; 
			UPDATE `u961758316_uefs`.`produtos` SET `Expirado` = 1 WHERE (NOW() > `Data_Vencimento`)";
			$this->Session->setFlash(__('Produtos Checados.'));
			$this->Produto->query($sql);
			return $this->redirect('/');

	}
	public function attStatusServicos()
	{
			$sql = "SELECT * FROM `u961758316_uefs`.`servicos`; 
			UPDATE `u961758316_uefs`.`servicos` SET `Expirado` = 1 WHERE (NOW() > `Data_Vencimento`)";
			$this->Session->setFlash(__('Serviços Checados.'));
			$this->Produto->query($sql);
			return $this->redirect('/');

	}
	public function attStatusNeg()
	{
			$sql = "SELECT * FROM `u961758316_uefs`.`negociacaos`; 
			UPDATE `u961758316_uefs`.`negociacaos` SET `Status` = 1 WHERE (NOW() > `Data_Final`)";
			$this->Session->setFlash(__('Negociações Checadas.'));
			$this->Produto->query($sql);
			return $this->redirect('/');

	}
	public function attStatusUsuarios()
	{
			$sql = "SELECT * FROM `u961758316_uefs`.`usuarios`; 
			UPDATE `u961758316_uefs`.`usuarios` SET `Status` = '1' WHERE (`usuarios`.`Strikes`>=	 3)";

			$this->Session->setFlash(__('Usuarios Checados.'));
			$this->Produto->query($sql);
			return $this->redirect('/');

	}
}
