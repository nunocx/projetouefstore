<?php
App::uses('AppController', 'Controller');
/**
 * Mensagems Controller
 *
 * @property Mensagem $Mensagem
 * @property PaginatorComponent $Paginator
 */
class MensagemsController extends AppController {

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
public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allowedActions = array('add');                        
    }
		public function index() {
			
			$mensagems = $this->paginate();
	        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
	            return $mensagems;
	        } else {  //Senão envia para a view padrão
	            $this->set('mensagems', $mensagems);
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
		if (!$this->Mensagem->exists($id)) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		$options = array('conditions' => array('Mensagem.' . $this->Mensagem->primaryKey => $id));
		$this->set('mensagem', $this->Mensagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mensagem->create();

			$this->request->data['Mensagem']['Data'] = date('Y-m-d');
			if ($this->Mensagem->save($this->request->data)) {
				$this->Session->setFlash(__('Obrigado sua mensagem foi enviada com sucesso.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('Occoreu um erro ao envio de sua mensagem.'));
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
		if (!$this->Mensagem->exists($id)) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mensagem->save($this->request->data)) {
				$this->Session->setFlash(__('The mensagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mensagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mensagem.' . $this->Mensagem->primaryKey => $id));
			$this->request->data = $this->Mensagem->find('first', $options);
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
		$this->Mensagem->id = $id;
		if (!$this->Mensagem->exists()) {
			throw new NotFoundException(__('Invalid mensagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mensagem->delete()) {
			$this->Session->setFlash(__('The mensagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mensagem could not be deleted. Please, try again.'));
		}
	return $this->redirect('/');
	}
}
