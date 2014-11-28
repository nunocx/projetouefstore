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
		$this->Servico->recursive = 0;
		$this->set('servicos', $this->Paginator->paginate());
	}
	public function indexView() {
        $produtos = $this->paginate();
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



	//	$timestamp = strtotime("+1 month");

		if ($this->request->is('post')) {

			$this->request->data['Servico']['Data_Publicacao']['day'] = date('d');
			$this->request->data['Servico']['Data_Publicacao']['month'] = date('m');
			$this->request->data['Servico']['Data_Publicacao']['year'] = date('Y');	
				$timestamp = strtotime("+30 days");
			$this->request->data['Servico']['Data_Vencimento']['day'] = date('d', $timestamp);
			$this->request->data['Servico']['Data_Vencimento']['month'] = date('m', $timestamp);
			$this->request->data['Servico']['Data_Vencimento']['year'] = date('Y', $timestamp);	
			
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


	/**
	 * index method
	 *
	 * @return void
	 */	
	public function search($termo) {
		$busca = "SELECT * 
		FROM  `u961758316_uefs`.`servicos`
		WHERE `servicos`.`name` LIKE ".$termo."OR `servicos`.`Descricao` LIKE ".$termo;

		if ($termo = NULL) {
			throw new NotFoundException(__('Invalid busca'));
		}
		$servicos = $this->Servico->query($busca);
	 	return $servicos;

	}
}