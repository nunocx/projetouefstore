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
 * @subpackage ComentariosController
 * @example Classe ComentariosController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
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
 * index
 * Método index padrão para listar os comentários paginados.
 * @return array Comentarios listados.
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
 * view
 * 
 * @throws NotFoundException
 * @param int $id
 * @return void
 */
	public function view($id = null) {
	
	}

/**
 * add
 * Esse método adiciona um novo comentário no banco.
 * Caso um problema ocorra ao salvar o comentário, um erro é exibido na tela.
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

	/**
	* adds
	* Esse método adiciona um comentário e liga ao usuário e o produto ou serviço ao qual o comentário se refere.
	* Antes de salvar o comentário, o Auth é usado para a autorizar o usuário.
	* Caso o id de produto ou serviço não exista, um erro é exibido. Caso algum erro ocorra ao salvar o comentário, um erro é exibido.
	* Caso o comentário seja devidamente adicionado, o usuário é redirecionado e uma mensagem de sucesso é exibida.
	* @param int $id_user Id do usuário
	* @param int $id_prod Id do produto
	* @param int $id_serv Id do serviço
	*/
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
 * método edit - para editar um comentário
 *
 * @throws NotFoundException
 * @param int $id
 * @return void
 */
	public function edit($id = null) {
		
	}

/**
 * método delete - para deletar um comentário
 *
 * @throws NotFoundException
 * @param int $id
 * @return void
 */
	public function delete($id = null) {
	
	}
}
