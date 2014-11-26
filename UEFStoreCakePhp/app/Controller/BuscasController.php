<?php
App::uses('AppController', 'Controller');

/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class BuscasController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function search_All() {
		$termo = "'%" . $this->request->query['termo']. "%'";
		$produtos = $this->requestAction('produtos/search/'.$termo);
		//debug($produtos) or die();
		//print_r($produtos);
		$servicos = $this->requestAction('servicos/search/'.$termo);
		$this->set('produtos', $produtos);
		$this->set('servicos', $servicos);
	}
}