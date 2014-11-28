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

		public function visao_geral() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

    	$busca = "SELECT * FROM `negociacaos` where `negociacaos`.`status` = 1 ORDER BY `data_final` DESC";
    	$resultado = $this->requestAction('/negociacaos/search/'.$busca);

		$data[0] = date('d/m/Y', strtotime("-25 days"));
		$data[1] = date('d/m/Y', strtotime("-20 days"));
		$data[2] = date('d/m/Y', strtotime("-15 days"));
		$data[3] = date('d/m/Y', strtotime("-10 days"));
		$data[4] = date('d/m/Y', strtotime("-5 days"));
		$data[5] = date('d/m/Y');

		$data[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data[5] = implode("-",array_reverse(explode("/",$data[5])));

	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[0]."' AND `negociacaos`.`data_final` < '".$data[1]."' AND `negociacaos`.`status` = 1;";
	    $valores = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[1]."' AND `negociacaos`.`data_final` < '".$data[2]."' AND `negociacaos`.`status` = 1;";
	    $valores[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[2]."' AND `negociacaos`.`data_final` < '".$data[3]."' AND `negociacaos`.`status` = 1;";
	    $valores[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[3]."' AND `negociacaos`.`data_final` < '".$data[4]."' AND `negociacaos`.`status` = 1;";
		$valores[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[4]."' AND `negociacaos`.`data_final` < '".$data[5]."' AND `negociacaos`.`status` = 1;";
		$valores[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data[5]."' AND `negociacaos`.`status` = 1;";
		$valores[5] = $this->requestAction('/negociacaos/search/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[0]."' AND `negociacaos`.`data_final` < '".$data[1]."' AND `negociacaos`.`status` = 0;";
	    $valores2 = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[1]."' AND `negociacaos`.`data_final` < '".$data[2]."' AND `negociacaos`.`status` = 0;";
	    $valores2[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[2]."' AND `negociacaos`.`data_final` < '".$data[3]."' AND `negociacaos`.`status` = 0;";
	    $valores2[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[3]."' AND `negociacaos`.`data_final` < '".$data[4]."' AND `negociacaos`.`status` = 0;";
		$valores2[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data[4]."' AND `negociacaos`.`data_final` < '".$data[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		
	    $ydata = array($valores[0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']);
	    //debug($ydata) or die();
	    $ydatas = array($valores2[0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']);
	    // Create the graph. These two calls are always required
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    $graph->xaxis->SetTickLabels($data);

	    // Create the linear plot
	    $lineplot=new LinePlot($ydata);
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);
	    // Add the plot to the graph
	    $graph->Add($lineplot);
	    $lineplot->SetColor('yellow');
	    $lineplot->SetLegend('Negociações Realizadas');

	    $lineplot2=new LinePlot($ydatas);
	    $graph->Add($lineplot2);
	    $lineplot2->SetColor('green');
	    $lineplot2->SetLegend('Negociações não Realizadas');

	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/graficoGeral.png";
	    $graph->img->Stream($fileName);

	    // Send it back to browser
	    //$graph->img->Headers();
	    //$graph->img->Stream();
	}

	public function anuncios(){
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

    	
	}

} 