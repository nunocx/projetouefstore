<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class GerenciamentosController extends AppController {

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
	public function index() {
		
		$this->set('gerenciamentos','Olá mundo estou no gerenciamento de tarefas');
	}

	public function relatorios() {  
		$busca = "SELECT * FROM `produtos` WHERE `Data_Vencimento` < '2014-11-24'";
		$resultado = $this->requestAction('produtos/buscaProdutos/'.$busca);
		//debug($resultado) or die();
		$this->set('resultados', $resultado);
	}
	
	public function relatorioproduto(){

	}
	public function funcrelatorioproduto() {
		$dataInicio = $this->request->query['dataInicio'];
		$dataFim = $this->request->query['dataFim'];
		$busca = "SELECT * FROM `produtos` WHERE `Data_Publicacao` >= ".$dataInicio." AND `Data_Publicacao` <=".$dataFim;
		$resultado = $this->requestAction('produtos/buscaProdutos/'.$busca);
		//debug($resultado) or die();
		$this->set('resultados', $resultado);
	}
} 