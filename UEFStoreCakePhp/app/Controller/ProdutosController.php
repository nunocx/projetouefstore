<?php
/**
 * @author Adriano Cavalcante <nuno.cavalcante@gmail.com>
 * @author Arthur Hagnês <arthurecomp@gmail.com>
 * @author Dermeval Neves <dermevalneves@gmail.com>
 * @author Fabio Santos <fabiosantos1388@gmail.com>
 * @author Higor Vital <h.vitall96@gmail.com>
 * @author Jéssica Santos <jessica22san@gmail.com>
 * @author Joacy Mesquita <joacymsilva@gmail.com>
 * @author Kaique Cabral <kaaiquecabral@gmail.com>
 * @author Leno Oliveira <lenoosouza@gmail.com>
 * @author Marcelo Bião <marcelobiao2@gmail.com>
 * @author Nielson Vágno <nielsonvagno@gmail.com>
 * @author Sillas Senna <ssennarm@gmail.com>
 * @version 1.0
 * @copyright 2014, SoftComp Empreendimentos, 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @package Controller
 * @subpackage ProdutosController
 * @example Classe ProdutosController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 * @access public
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


	//public function index() {	}

    /**
     * indexView
     * Esse método retorna todos os produtos paginados para a view.
     * @return array Produtos indexados.
     */
    public function indexView() {
        $produtos = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $produtos;
        } else {  //Senão envia para a view padrão
            $this->set('produtos', $produtos);
        }
    }

    /**
     * ultimosProdutos
     * Esse médoto mostra os produtos ordenados por data de publicação em ordem decrescente.
     * @return array Produtos listados.
     */
    public function ultimosProdutos(){
    	$produtos = $this->Produto->query("SELECT * FROM `produtos` ORDER BY `Data_Publicacao` DESC");
    	return $produtos;
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
         $this->Auth->allowedActions = array('indexView');                        
    }

    /**
     * my
     * Esse método retorna os produtos do usuário autenticado atualmente.
     * O usuário autenticado é identificado através do componente Auth.
     * @return array Produtos do usuário.
     */
    public function my() {
		$produtos = $this->paginate();
        if($this->request->is('requested')){   //Se for requisição de outra view/element:
            $buscaprodutos = "SELECT * FROM  `produtos` WHERE usuario_id=".$this->Auth->user('id')."";
            $produtos = $this->Produto->query($buscaprodutos);

            return $produtos;
        } else {
        	 $this->set('produtos', $produtos);
        }

/**
* view
* Método view padrão para visualizar um produto.
* @param int $id Id do produto.
* @throws NotFoundException Caso o produto não seja encontrado.
*/
	}
	public function view($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$this->set('produto', $this->Produto->find('first', $options));
	}

/**
* prodCategoria
* Esse método retorna todos os produtos de uma determinada categoria.
* @param int $id Id da categoria.
*/

	public function prodCategoria($id = null){

		$busca = "SELECT * FROM  `produtos` WHERE `produtos`.`category_id`= $id";
		$produtos = $this->Produto->query($busca);
		return  $produtos;
	}

/**
 * add
 * Método padrão para adicionar um novo produto.
 * A validade é setada para 30 dias após a publicação, usando o timestamp para incrementar a data a partir da data inicial.
 * @return void
 */
	public function add() {


	
					//echo date('d', $timestamp); 
		if ($this->request->is('post')) {
			
		
			
			$this->Produto->create();
			$this->request->data['Produto']['usuario_id'] = $this->Auth->user('id');
			$this->request->data['Produto']['Data_Publicacao']['day'] = date('d');
			$this->request->data['Produto']['Data_Publicacao']['month'] = date('m');
			$this->request->data['Produto']['Data_Publicacao']['year'] = date('Y');	
				$timestamp = strtotime("+30 days");
			$this->request->data['Produto']['Data_Vencimento']['day'] = date('d', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['month'] = date('m', $timestamp);
			$this->request->data['Produto']['Data_Vencimento']['year'] = date('Y', $timestamp);	
			
			

			//echo date('d', $timestamp).'/'.date('m', $timestamp).'/'.date('Y', $timestamp);
			//debug($this->request->data['Produto']['Data_Vencimento'])or die ();
			if ($this->Produto->save($this->request->data)) {
				//$this->Session->setFlash(__('The produto has been saved.'));

				$id_ = $this->Produto->id;
				return $this->redirect('/');

			} else {
				$this->Session->setFlash(__('The produto could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Produto->Usuario->find('list');
		$categories = $this->Produto->Category->find('list');
		$this->set(compact('usuarios', 'categories'));
	}

    /**
     * etapa2
     * Segunda etapa para adição de produto.
     * Esse método finaliza a adição do produto.
     * @param int $id Id do produto.
     * @throws NotFoundException Caso o produto não seja encontrado.
     */
    public function etapa2($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid Produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('Produto foi salvo'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('Houve um erro, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
			$this->request->data = $this->Produto->find('first', $options);
		}
	}

/**
 * edit
 * Método para edição padrão das informações do produto.
 *
 * @throws NotFoundException Caso o produto não seja encontrado.
 * @param int $id Id do produto.
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('O Produto foi editado.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('O Produto não pode ser editado, tente novamente.'));
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
 * delete
 * Método padrão para deletar um produto cadastrado.
 *
 * @throws NotFoundException Caso o produto não seja encontrado.
 * @param int $id Id do produto.
 * @return void
 */
	public function delete($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produto->delete()) {
			$this->Session->setFlash(__('Produto Deletado.'));
		} else {
			$this->Session->setFlash(__('Produto não foi deletado, tente novamente'));
		}
	return $this->redirect('/');
	}

    /**
     * search
     * Método de busca um produto cadastrado, através de um termo que esteja contido no nome do produto desejado.
     * @param string $termo O termo que deve estar contido no título do produto.
     * @return array Produtos que correpondem à busca.
     * @throws NotFoundException Caso não seja encontrado nenhum produto com o termo.
     */
    public function search($termo){

		$busca = "SELECT * FROM  `produtos` WHERE `produtos`.`name` LIKE '%".$termo."%' AND `produtos`.`Bloqueado` = 0 AND `produtos`.`Expirado` = 0";
//debug($busca) or die();
		if ($termo = NULL) {
			throw new NotFoundException(__('Invalid busca'));
		}
		$produtos = $this->Produto->query($busca);
	 	return $produtos;
	}
}
