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
 * @subpackage NegociacaosController
 * @example Classe NegociacaosController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
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
 * index
 * Método index para retornar todas as negociações paginadas.
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
 * view
 * Método view padrão para visualizar a negociação.
 * @throws NotFoundException
 * @param id Id da negociação.
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
* add
* @deprecated
* Método de adição padrão de negociação, só pode ser efetuado caso o usuário seja autorizado através do componente Auth.
* A data limite é setada para 14 dias após o início da negociação, usando o timestamp para incrementar a data a partir da data inicial.
*/
	public function add() {

		if ($this->request->is('post')) {
			$this->request->data['Negociacao']['interessado'] = $this->Auth->user('id');
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

	/**
	* adds
	* Método para adicionar negociação.
	* Esse método recebe as informações de usuario interessado, dono do anúncio e serviço ou produto da negociação.
	* As informações são ligadas aos usuários e anúncios indicados.
	* A data limite é setada para 14 dias após o início da negociação, usando o timestamp para incrementar a data a partir da data inicial.
	*/

	public function adds($userInteressado =null, $usario_id = null, $servico=null,$produto=null) {
		

		
		if ($this->request->is('post')) {

			$this->Negociacao->create();
			
			$this->request->data['Negociacao']['interessado'] = $this->Auth->user('id');
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

				$this->Negociacao->create();
			if ($this->Negociacao->save($this->request->data)) {
				$this->Session->setFlash(__('Negociação Feita'));
				return $this->redirect('/');
			} else {
					$this->Session->setFlash(__('Negociação não feita'));
			}
		}
		
		$usuarios = $this->Negociacao->Usuario->find('list');
		$produtos = $this->Negociacao->Produto->find('list');
		$servicos = $this->Negociacao->Servico->find('list');
		$this->set(compact('usuarios', 'produtos', 'servicos'));
	}

/**
 * edit
 * Método padrão de atualização de informação da negociação.
 * @throws NotFoundException Caso a negociação não exista.
 * @param id Id da negociação a ser editada.
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
 * delete
 * Método padrão para excluir a negociação.
 * @throws NotFoundException Caso a negociação não exista.
 * @param id Id da negociação a ser excluída.
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
