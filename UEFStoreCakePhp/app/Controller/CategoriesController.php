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
 * @subpackage CategoriesController
 * @example Classe CategoriesController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
/**
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends Controller {
	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	

/**
 * metódo index
 *
 * @return void
 */
	public function index() {
		
	}

public function indexView() {
        $categories = $this->paginate();
        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
            return $categories;
        } else {  //Senão envia para a view padrão
            $this->set('categories', $categories);
        }
    }

/**
 * método view - para a visualização das categorias
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		//$produtos = $this->requestAction('/produtos/prodCategoria/'.$id);
		//$servicos = $this->requestAction('/servicos/servCategoria/'.$id);
		
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
		//debug($produtos) or die();
	//	$this->set('produtos', $produtos);
	//	$this->set('servicos', $servicos);	
	}

/**
 * método add - para adicionar categoria
 *
 * @return void
 */
	public function add() {
		
	}

/**
 * método edit - para editar uma categoria
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
	}

/**
 * método delete - para deletar uma categoria
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
	}
}
