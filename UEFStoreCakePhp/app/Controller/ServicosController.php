<?php
/**
 * @author Adriano Cavalcante <nuno.cavalcante@gmail.com>
 * @author Arthur Hagnês <arthurecomp@gmail.com>
 * @author Dermeval Neves <dermevalneves@gmail.com>
 * @author Fabio Santos <fabiosantos1388@gmail.com>
 * @author Higor Vital <h.vitall96@gmail.com>
 * @author JÃ©ssica Santos <jessica22san@gmail.com>
 * @author Joacy Mesquita <joacymsilva@gmail.com>
 * @author Kaique Cabral <kaaiquecabral@gmail.com>
 * @author Leno Oliveira <lenoosouza@gmail.com>
 * @author Marcelo Bião <marcelobiao2@gmail.com>
 * @author Nielson Vágno <nielsonvagno@gmail.com>
 * @author Sillas Senna <ssennarm@gmail.com>
 * @version 1.0
 * @copyright 2014, SoftComp Empreendimentos, 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @package Controller
 * @subpackage ServicosController
 * @example Classe ServicosController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
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
		
		$servicos = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $servicos;
        } else {  //Senão envia para a view padrão
            $this->set('servicos', $servicos);
        }
	}
	 public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allowedActions = array('index');                        
    }
    public function my() {
		$servico = $this->paginate();
        if($this->request->is('requested')){   //Se for requisição de outra view/element:
            $buscaservico = "SELECT * FROM  `servicos` WHERE usuario_id=".$this->Auth->user('id')."";
            $servico = $this->Servico->query($buscaservico);
            return $servico;
        } else {
        	 $this->set('servico', $servico);
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

		
			
			$this->Servico->create();
			$this->request->data['Servico']['usuario_id'] = $this->Auth->user('id');
				$this->request->data['Servico']['Data_Publicacao']['day'] = date('d');
			$this->request->data['Servico']['Data_Publicacao']['month'] = date('m');
			$this->request->data['Servico']['Data_Publicacao']['year'] = date('Y');	
				$timestamp = strtotime("+30 days");
			$this->request->data['Servico']['Data_Vencimento']['day'] = date('d', $timestamp);
			$this->request->data['Servico']['Data_Vencimento']['month'] = date('m', $timestamp);
			$this->request->data['Servico']['Data_Vencimento']['year'] = date('Y', $timestamp);	

			if ($this->Servico->save($this->request->data)) {
				//$this->Session->setFlash(__('The servico has been saved.'));
				$id_ = $this->Servico->id;
				return $this->redirect('/');
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
						return $this->redirect('/');
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
					return $this->redirect('/');
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
				return $this->redirect('/');
	}


	/**
	 * index method
	 *
	 * @return void
	 */	
	public function search($termo) {
		$busca = "SELECT * 
		FROM  `servicos`
		WHERE `servicos`.`name` LIKE '%".$termo."%' AND `servicos`.`Bloqueado` = 0 AND `servicos`.`Expirado` = 0";

		if ($termo = NULL) {
			throw new NotFoundException(__('Invalid busca'));
		}
		$servicos = $this->Servico->query($busca);
	 	return $servicos;

	}
}
