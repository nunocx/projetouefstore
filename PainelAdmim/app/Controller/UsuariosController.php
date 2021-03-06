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
				$this->Session->setFlash(__('Usuario Editado'),'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuario não foi editado'),'flash_fail');
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
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The usuario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search() {

		$termo = "'%" . $this->request->query['termo']. "%'";
		$busca = "SELECT * 
		FROM  `u961758316_uefs`.`usuarios`
		WHERE `usuarios`.`name` LIKE ".$termo;

		if ($termo = NULL) {
			throw new NotFoundException(__('Invalid busca'));
		}
		$usuarios = $this->Usuario->query($busca);
	 	$this->set('usuarios', $usuarios);
	}

	public function buscaUsuarios($comando){
		$resultado = $this->Usuario->query($comando);
		return $resultado;
	}


public function block($id = null)
	{
		$i = $id;
		//$date = date('Y-m-d');					
		if (!$this->Usuario->exists($i)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
			
			$selc = " SELECT *
						FROM `u961758316_uefs`.`usuarios` 
						WHERE `usuarios`.`id` = $i";
			$b = $this->Usuario->query($selc);			
			//debug($b ) or die();

			foreach ($b as $bs) {
				//debug($bs) or die();
				$idS = $bs['usuarios']['id'];
				$statusUser = $bs['usuarios']['Strikes'];
				$nomeUser = $bs['usuarios']['name'];
				break;
			}
			
			//debug($statusUser) or die();

			if($statusUser == 1)
			{
			$sql = "INSERT INTO `u961758316_uefs`.`user_bloq`(`id`, `usuario_id`, `dataBloq`) VALUES (NULL,$i,NOW());
			 UPDATE `u961758316_uefs`.`usuarios`
						SET `usuarios`.`Strikes` = 0 
						WHERE `usuarios`.`id` = $i AND $idS = $i ;
			";
				$this->Usuario->query($sql);
					
			$this->Session->setFlash(__('Usuário [ <b>'.$nomeUser.'</b> ] foi Bloqueado'),'flash_success');
			}
			else
			{

					$sql = "DELETE FROM `u961758316_uefs`.`user_bloq` WHERE `user_bloq`.`usuario_id` = $i;
					UPDATE `u961758316_uefs`.`usuarios`
						SET `usuarios`.`Strikes` = 1  
						WHERE `usuarios`.`id` = $i AND $idS = $i";
					$this->Usuario->query($sql);		
					//$update = " ";
					//$this->Usuario->query($update);
		
					$this->Session->setFlash(__('Usuário [ <b>'.$nomeUser.'</b> ] foi Desbloquiado'),'flash_success');
			}
			return $this->redirect('/');
	}


}

