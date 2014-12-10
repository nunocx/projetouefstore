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
 * Classe CategoriesController
 * @access public
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends Controller {
	
/**
 * Components
 * @var array Paginação de categorias.
 */
	public $components = array('Paginator');
	

	//public function index(){}

    /**
     * Método indexView
     * Esse método separa as categorias num array de paginação, se for requisitado por outra view, retorna esse array, caso contrário, seta a propriedade categories para esse array.
     * @return array Categorias paginadas
     */
public function indexView() {
        $categories = $this->paginate();
        if ($this->request->is('requested')) {
            return $categories;
        } else {
            $this->set('categories', $categories);
        }
    }

/**
 * view
 * Método de visualização geral de categoria, faz uma consulta sql e retorna a primeira categoria com a id selecionada.
 * @throws NotFoundException Se a categoria não existir.
 * @param string $id Id da categoria
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


	//public function add() {}

//	public function edit($id = null) {}

//	public function delete($id = null) {}
}
