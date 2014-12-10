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
 * @subpackage ReportsController
 * @example Classe ReportsController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
/**
 * Reports Controller
 *
 * @property Report $Report
 * @property PaginatorComponent $Paginator
 */
class ReportsController extends Controller {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index
 * Método index, mostra todas as denúncias paginadas.
 * @return void
 */
	public function index() {
		$this->Report->recursive = 0;
		$this->set('reports', $this->Paginator->paginate());
	}

/**
 * view
 * Método view para visualizar uma denúncia.
 * @throws NotFoundException Caso a denúncia não seja encontrada.
 * @param int $id Id da denúncia.
 * @return void
 */
	public function view($id = null) {
		if (!$this->Report->exists($id)) {
			throw new NotFoundException(__('Invalid report'));
		}
		$options = array('conditions' => array('Report.' . $this->Report->primaryKey => $id));
		$this->set('report', $this->Report->find('first', $options));
	}

/**
 * add
 * Método padrão para adicionar nova denúncia.
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Report->create();
			if ($this->Report->save($this->request->data)) {
				$this->Session->setFlash(__('The report has been saved.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('The report could not be saved. Please, try again.'));
			}
		}
		$produtos = $this->Report->Produto->find('list');
		$servicos = $this->Report->Servico->find('list');
		$usuarios = $this->Report->Usuario->find('list');
		$this->set(compact('produtos', 'servicos', 'usuarios'));
	}

/**
 * edit
 * Método padrão para editar as informações de uma denúncia.
 * @throws NotFoundException Caso a denúncia não seja encontrada.
 * @param int $id Id da denúncia.
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Report->exists($id)) {
			throw new NotFoundException(__('Invalid report'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Report->save($this->request->data)) {
				$this->Session->setFlash(__('The report has been saved.'));
						return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('The report could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Report.' . $this->Report->primaryKey => $id));
			$this->request->data = $this->Report->find('first', $options);
		}
		$produtos = $this->Report->Produto->find('list');
		$servicos = $this->Report->Servico->find('list');
		$usuarios = $this->Report->Usuario->find('list');
		$this->set(compact('produtos', 'servicos', 'usuarios'));
	}

/**
 * delete method
 * Método padrão para excluir uma denúncia.
 * @throws NotFoundException Caso a denúncia não seja encontrada.
 * @param int $id Id da denúncia.
 * @return void
 */
	public function delete($id = null) {
		$this->Report->id = $id;
		if (!$this->Report->exists()) {
			throw new NotFoundException(__('Invalid report'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Report->delete()) {
			$this->Session->setFlash(__('The report has been deleted.'));
		} else {
			$this->Session->setFlash(__('The report could not be deleted. Please, try again.'));
		}
				return $this->redirect('/');
}
