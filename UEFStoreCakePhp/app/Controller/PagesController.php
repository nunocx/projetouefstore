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
 * @subpackage PagesController
 * @example Classe PagesController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
