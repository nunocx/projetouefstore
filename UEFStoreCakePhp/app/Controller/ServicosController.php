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
 * index
 * Método index, mostra todos os serviços paginados.
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

/**
     * ultimosServicos
     * Esse médoto mostra os serviços ordenados por data de publicação em ordem decrescente.
     * @return mixed
     */

	public function ultimosServicos(){
    	$servicos = $this->Servico->query("SELECT * FROM `servicos` ORDER BY `Data_Publicacao` DESC");
    	return $servicos;
    }

	/**
	 * beforeFilter
	 * Método herdado do AppController para filtrar a autorização do usuário aos métodos da classe.
	 * @return void
	 * @see AppController
	 */

	 public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allowedActions = array('index');                        
    }

/**
     * my
     * Esse método retorna os serviços do usuário autenticado atualmente.
     * O usuário autenticado é identificado através do componente Auth.
     * @return array Serviços do usuário.
     */

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
* view
* Método view padrão para visualizar um serviço.
* @param int $id Id do serviço.
* @throws NotFoundException Caso o serviço não seja encontrado.
*/

	public function view($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid servico'));
		}
		$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
		$this->set('servico', $this->Servico->find('first', $options));
	}
	public function servCategoria($id = null){
		
		$busca = "SELECT * FROM  `servicos` WHERE `servicos`.`category_id`= $id";
		$servicos = $this->Servico->query($busca);
		//debug($servicos) or die();
		return  $servicos;
	}

/**
 * add
 * Método padrão para adicionar um novo serviço.
 * A validade é setada para 30 dias após a publicação, usando o timestamp para incrementar a data a partir da data inicial.
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
 * edit
 * Método para edição padrão das informações do serviço.
 *
 * @throws NotFoundException Caso o serviço não seja encontrado.
 * @param int $id Id do serviço.
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

	/**
     * etapa2
     * Segunda etapa para adição de serviço.
     * Esse método finaliza a adição do serviço.
     * @param int $id Id do serviço.
     * @throws NotFoundException Caso o serviço não seja encontrado.
     */

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
 * delete
 * Método padrão para deletar um serviço cadastrado.
 *
 * @throws NotFoundException Caso o serviço não seja encontrado.
 * @param int $id Id do serviço.
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
     * search
     * Método de busca um serviço cadastrado, através de um termo que esteja contido no nome do serviço desejado.
     * @param string $termo O termo que deve estar contido no título do serviço.
     * @return array Serviços que correpondem à busca.
     * @throws NotFoundException Caso não seja encontrado nenhum serviço com o termo.
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
