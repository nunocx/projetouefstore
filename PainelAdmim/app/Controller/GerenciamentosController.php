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

		$data[0] = date('d/m/Y', strtotime("-25 days"));
		$data[1] = date('d/m/Y', strtotime("-20 days"));
		$data[2] = date('d/m/Y', strtotime("-15 days"));
		$data[3] = date('d/m/Y', strtotime("-10 days"));
		$data[4] = date('d/m/Y', strtotime("-5 days"));
		$data[5] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));

		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));

	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[0]."' AND `negociacaos`.`data_final` < '".$data2[1]."' AND `negociacaos`.`status` = 1;";
	    $valores[0] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[1]."' AND `negociacaos`.`data_final` < '".$data2[2]."' AND `negociacaos`.`status` = 1;";
	    $valores[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[2]."' AND `negociacaos`.`data_final` < '".$data2[3]."' AND `negociacaos`.`status` = 1;";
	    $valores[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[3]."' AND `negociacaos`.`data_final` < '".$data2[4]."' AND `negociacaos`.`status` = 1;";
		$valores[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[4]."' AND `negociacaos`.`data_final` < '".$data2[5]."' AND `negociacaos`.`status` = 1;";
		$valores[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[5]."' AND `negociacaos`.`status` = 1;";
		$valores[5] = $this->requestAction('/negociacaos/search/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[0]."' AND `negociacaos`.`data_final` < '".$data2[1]."' AND `negociacaos`.`status` = 0;";
	    $valores2 = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[1]."' AND `negociacaos`.`data_final` < '".$data2[2]."' AND `negociacaos`.`status` = 0";
	    $valores2[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[2]."' AND `negociacaos`.`data_final` < '".$data2[3]."' AND `negociacaos`.`status` = 0;";
	    $valores2[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[3]."' AND `negociacaos`.`data_final` < '".$data2[4]."' AND `negociacaos`.`status` = 0;";
		$valores2[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[4]."' AND `negociacaos`.`data_final` < '".$data2[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		
	    $ydata = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']);
	    //debug($valores) or die();
	    $ydatas = array($valores2[0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']);
	    // Create the graph. These two calls are always required
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    $graph->xaxis->SetTickLabels(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]));

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
	    $graph->title->Set("Últimas Negociações");

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

		public function negociacoesAno() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

		$data[0] = date('d/m/Y', strtotime("-11 month"));
		$data[1] = date('d/m/Y', strtotime("-10 month"));
		$data[2] = date('d/m/Y', strtotime("-9 month"));
		$data[3] = date('d/m/Y', strtotime("-8 month"));
		$data[4] = date('d/m/Y', strtotime("-7 month"));
		$data[5] = date('d/m/Y', strtotime("-6 month"));
		$data[6] = date('d/m/Y', strtotime("-5 month"));
		$data[7] = date('d/m/Y', strtotime("-4 month "));
		$data[8] = date('d/m/Y', strtotime("-3 month "));
		$data[9] = date('d/m/Y', strtotime("-2 month "));
		$data[10] = date('d/m/Y', strtotime("-1 month "));
		$data[11] = date('d/m/Y');
		//debug($data) or die();

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));
		$data2[7] = implode("-",array_reverse(explode("/",$data[7])));
		$data2[8] = implode("-",array_reverse(explode("/",$data[8])));
		$data2[9] = implode("-",array_reverse(explode("/",$data[9])));
		$data2[10] = implode("-",array_reverse(explode("/",$data[10])));
		$data2[11] = implode("-",array_reverse(explode("/",$data[11])));

	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[0]."' AND `negociacaos`.`data_final` < '".$data2[1]."' AND `negociacaos`.`status` = 1;";
	    $valores[0] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[1]."' AND `negociacaos`.`data_final` < '".$data2[2]."' AND `negociacaos`.`status` = 1;";
	    $valores[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[2]."' AND `negociacaos`.`data_final` < '".$data2[3]."' AND `negociacaos`.`status` = 1;";
	    $valores[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[3]."' AND `negociacaos`.`data_final` < '".$data2[4]."' AND `negociacaos`.`status` = 1;";
		$valores[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[4]."' AND `negociacaos`.`data_final` < '".$data2[5]."' AND `negociacaos`.`status` = 1;";
		$valores[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[5]."' AND `negociacaos`.`data_final` < '".$data2[6]."' AND `negociacaos`.`status` = 1;";
		$valores[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[6]."' AND `negociacaos`.`data_final` < '".$data2[7]."' AND `negociacaos`.`status` = 1;";
		$valores[6] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[7]."' AND `negociacaos`.`data_final` < '".$data2[8]."' AND `negociacaos`.`status` = 1;";
		$valores[7] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[8]."' AND `negociacaos`.`data_final` < '".$data2[9]."' AND `negociacaos`.`status` = 1;";
		$valores[8] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[9]."' AND `negociacaos`.`data_final` < '".$data2[10]."' AND `negociacaos`.`status` = 1;";
		$valores[9] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[10]."' AND `negociacaos`.`data_final` < '".$data2[11]."' AND `negociacaos`.`status` = 1;";
		$valores[10] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[11]."' AND `negociacaos`.`status` = 1;";
		$valores[11] = $this->requestAction('/negociacaos/search/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[0]."' AND `negociacaos`.`data_final` < '".$data2[1]."' AND `negociacaos`.`status` = 0;";
	    $valores2[0] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[1]."' AND `negociacaos`.`data_final` < '".$data2[2]."' AND `negociacaos`.`status` = 0;";
	    $valores2[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[2]."' AND `negociacaos`.`data_final` < '".$data2[3]."' AND `negociacaos`.`status` = 0;";
	    $valores2[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[3]."' AND `negociacaos`.`data_final` < '".$data2[4]."' AND `negociacaos`.`status` = 0;";
		$valores2[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[4]."' AND `negociacaos`.`data_final` < '".$data2[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[5]."' AND `negociacaos`.`data_final` < '".$data2[6]."' AND `negociacaos`.`status` = 0;";
		$valores2[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[6]."' AND `negociacaos`.`data_final` < '".$data2[7]."' AND `negociacaos`.`status` = 0;";
		$valores2[6] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[7]."' AND `negociacaos`.`data_final` < '".$data2[8]."' AND `negociacaos`.`status` = 0;";
		$valores2[7] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[8]."' AND `negociacaos`.`data_final` < '".$data2[9]."' AND `negociacaos`.`status` = 0;";
		$valores2[8] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[9]."' AND `negociacaos`.`data_final` < '".$data2[10]."' AND `negociacaos`.`status` = 0;";
		$valores2[9] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` >= '".$data2[10]."' AND `negociacaos`.`data_final` < '".$data2[11]."' AND `negociacaos`.`status` = 0;";
		$valores2[10] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[11]."' AND `negociacaos`.`status` = 0;";
		$valores2[11] = $this->requestAction('/negociacaos/search/'.$qtd);
		
	    $ydata = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']
	    				 , $valores[6][0][0]['COUNT(*)'], $valores[7][0][0]['COUNT(*)'], $valores[8][0][0]['COUNT(*)']
	    				 , $valores[9][0][0]['COUNT(*)'], $valores[10][0][0]['COUNT(*)'], $valores[11][0][0]['COUNT(*)']);
	    
	    $ydatas = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']
	    				  , $valores2[6][0][0]['COUNT(*)'] , $valores2[7][0][0]['COUNT(*)'] , $valores2[8][0][0]['COUNT(*)']
	    				   , $valores2[9][0][0]['COUNT(*)'] , $valores2[10][0][0]['COUNT(*)'] , $valores2[11][0][0]['COUNT(*)']);
	    // Create the graph. These two calls are always required
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    for($i = 0; $i < 12; $i++) {
	    	if(substr($data[$i], 3, 2) == "01") { $data[$i] = "Jan"; }
	    	if(substr($data[$i], 3, 2) == "02") { $data[$i] = "Fev"; }
	    	if(substr($data[$i], 3, 2) == "03") { $data[$i] = "Mar"; }
	    	if(substr($data[$i], 3, 2) == "04") { $data[$i] = "Abr"; }
	    	if(substr($data[$i], 3, 2) == "05") { $data[$i] = "Mai"; }
	    	if(substr($data[$i], 3, 2) == "06") { $data[$i] = "jun"; }
	    	if(substr($data[$i], 3, 2) == "07") { $data[$i] = "Jul"; }
	    	if(substr($data[$i], 3, 2) == "08") { $data[$i] = "Ago"; }
	    	if(substr($data[$i], 3, 2) == "09") { $data[$i] = "Set"; }
	    	if(substr($data[$i], 3, 2) == "10") { $data[$i] = "Out"; }
	    	if(substr($data[$i], 3, 2) == "11") { $data[$i] = "Nov"; }
	    	if(substr($data[$i], 3, 2) == "12") { $data[$i] = "Dez"; }
	    }

	    $graph->xaxis->SetTickLabels(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11]));

	    $lineplot=new LinePlot($ydata);
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

	    $graph->Add($lineplot);
	    $lineplot->SetColor('yellow');
	    $lineplot->SetLegend('Negociações Realizadas');

	    $lineplot2=new LinePlot($ydatas);
	    $graph->Add($lineplot2);
	    $lineplot2->SetColor('green');
	    $lineplot2->SetLegend('Negociações não Realizadas');
	    $graph->title->Set("Negociações no Ano");

	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    $fileName = "img/relatorios/negociacoesAno.png";
	    $graph->img->Stream($fileName);
	}

	public function negociacoesSem() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

		$data[0] = date('d/m/Y', strtotime("-1 days"));
		$data[1] = date('d/m/Y', strtotime("-5 days"));
		$data[2] = date('d/m/Y', strtotime("-4 days"));
		$data[3] = date('d/m/Y', strtotime("-3 days"));
		$data[4] = date('d/m/Y', strtotime("-2 days"));
		$data[5] = date('d/m/Y', strtotime("-1 days"));
		$data[6] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));

	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[0]."' AND `negociacaos`.`status` = 1;";
	    $valores[0] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[1]."' AND `negociacaos`.`status` = 1;";
	    $valores[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[2]."' AND `negociacaos`.`status` = 1;";
	    $valores[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[3]."' AND `negociacaos`.`status` = 1;";
		$valores[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[4]."' AND `negociacaos`.`status` = 1;";
		$valores[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[5]."' AND `negociacaos`.`status` = 1;";
		$valores[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[6]."' AND `negociacaos`.`status` = 1;";
		$valores[6] = $this->requestAction('/negociacaos/search/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[0]."' AND `negociacaos`.`status` = 0;";
	    $valores2[0] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[1]."' AND `negociacaos`.`status` = 0";
	    $valores2[1] = $this->requestAction('/negociacaos/search/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[2]."' AND `negociacaos`.`status` = 0;";
	    $valores2[2] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[3]."' AND `negociacaos`.`status` = 0;";
		$valores2[3] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[4]."' AND `negociacaos`.`status` = 0;";
		$valores2[4] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[5]."' AND `negociacaos`.`status` = 0;";
		$valores2[5] = $this->requestAction('/negociacaos/search/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `negociacaos` WHERE `negociacaos`.`data_final` = '".$data2[6]."' AND `negociacaos`.`status` = 0;";
		$valores2[6] = $this->requestAction('/negociacaos/search/'.$qtd);
		
	    $ydata = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)'] , $valores[6][0][0]['COUNT(*)']);
	    
	    $ydatas = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)'], $valores2[6][0][0]['COUNT(*)']);
	    //debug($valores[0][0][0]['COUNT(*)']) or die();
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    $graph->xaxis->SetTickLabels(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]));

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
	    $graph->title->Set("Negociações na Semana");

	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/negociacoesSem.png";
	    $graph->img->Stream($fileName);

	    // Send it back to browser
	    //$graph->img->Headers();
	    //$graph->img->Stream();
	}

	public function negociacoes(){

	}

	public function anuncios(){
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_bar');

		$data[0] = date('d/m/Y', strtotime("-25 days"));
		$data[1] = date('d/m/Y', strtotime("-20 days"));
		$data[2] = date('d/m/Y', strtotime("-15 days"));
		$data[3] = date('d/m/Y', strtotime("-10 days"));
		$data[4] = date('d/m/Y', strtotime("-5 days"));
		$data[5] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));

	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[0]."' AND `produtos`.`Data_Publicacao` < '".$data2[1]."' AND `produtos`.`Expirado` = 0;";
	    $valores[0] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[1]."' AND `produtos`.`Data_Publicacao` < '".$data2[2]."' AND `produtos`.`Expirado` = 0;";
	    $valores[1] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[2]."' AND `produtos`.`Data_Publicacao` < '".$data2[3]."' AND `produtos`.`Expirado` = 0;";
	    $valores[2] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[3]."' AND `produtos`.`Data_Publicacao` < '".$data2[4]."' AND `produtos`.`Expirado` = 0;";
		$valores[3] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[4]."' AND `produtos`.`Data_Publicacao` < '".$data2[5]."' AND `produtos`.`Expirado` = 0;";
		$valores[4] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` = '".$data2[5]."' AND `produtos`.`Expirado` = 0;";
		$valores[5] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[0]."' AND `servicos`.`Data_Publicacao` < '".$data2[1]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[0] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[1]."' AND `servicos`.`Data_Publicacao` < '".$data2[2]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[1] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[2]."' AND `servicos`.`Data_Publicacao` < '".$data2[3]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[2] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[3]."' AND `servicos`.`Data_Publicacao` < '".$data2[4]."' AND `servicos`.`Expirado` = 0;";
		$valores2[3] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[4]."' AND `servicos`.`Data_Publicacao` < '".$data2[5]."' AND `servicos`.`Expirado` = 0;";
		$valores2[4] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` = '".$data2[5]."' AND `servicos`.`Expirado` = 0;";
		$valores2[5] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
  
  	    $data1y = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']);
	    
	    $data2y = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']);

		//$data1y=array(47,80,40,116, 12, 20, 60);
		//$data2y=array(61,30,82,105, 12, 90, 130);
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    //$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135,1));
		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    // Create the linear plot
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

	    // Create the bar plots
		$b1plot = new BarPlot($data1y);
		$b2plot = new BarPlot($data2y);

		// Create the grouped bar plot
		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
		// ...and add it to the graPH
		$graph->Add($gbplot);


		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#cc1111");
		$b1plot->SetLegend('Produtos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#11cccc");
		$b2plot->SetLegend('Serviços');

		$graph->title->Set("Últimos Anúncios");
	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/ultimosanuncios.png";
	    $graph->img->Stream($fileName);

	    // Send it back to browser
	    //$graph->img->Headers();
	    //$graph->img->Stream();
	}

	public function anunciosSem() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_bar');

		$data[0] = date('d/m/Y', strtotime("-6 days"));
		$data[1] = date('d/m/Y', strtotime("-5 days"));
		$data[2] = date('d/m/Y', strtotime("-4 days"));
		$data[3] = date('d/m/Y', strtotime("-3 days"));
		$data[4] = date('d/m/Y', strtotime("-2 days"));
		$data[5] = date('d/m/Y', strtotime("-1 days"));
		$data[6] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));

	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[0]."' AND `produtos`.`Data_Publicacao` < '".$data2[1]."' AND `produtos`.`Expirado` = 0;";
	    $valores[0] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[1]."' AND `produtos`.`Data_Publicacao` < '".$data2[2]."' AND `produtos`.`Expirado` = 0;";
	    $valores[1] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[2]."' AND `produtos`.`Data_Publicacao` < '".$data2[3]."' AND `produtos`.`Expirado` = 0;";
	    $valores[2] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[3]."' AND `produtos`.`Data_Publicacao` < '".$data2[4]."' AND `produtos`.`Expirado` = 0;";
		$valores[3] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[4]."' AND `produtos`.`Data_Publicacao` < '".$data2[5]."' AND `produtos`.`Expirado` = 0;";
		$valores[4] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[5]."' AND `produtos`.`Data_Publicacao` < '".$data2[6]."' AND `produtos`.`Expirado` = 0;";
		$valores[5] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` = '".$data2[6]."' AND `produtos`.`Expirado` = 0;";
		$valores[6] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[0]."' AND `servicos`.`Data_Publicacao` < '".$data2[1]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[0] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[1]."' AND `servicos`.`Data_Publicacao` < '".$data2[2]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[1] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[2]."' AND `servicos`.`Data_Publicacao` < '".$data2[3]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[2] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[3]."' AND `servicos`.`Data_Publicacao` < '".$data2[4]."' AND `servicos`.`Expirado` = 0;";
		$valores2[3] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[4]."' AND `servicos`.`Data_Publicacao` < '".$data2[5]."' AND `servicos`.`Expirado` = 0;";
		$valores2[4] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[5]."' AND `servicos`.`Data_Publicacao` < '".$data2[6]."' AND `servicos`.`Expirado` = 0;";
		$valores2[5] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` = '".$data2[6]."' AND `servicos`.`Expirado` = 0;";
		$valores2[6] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
  
  	    $data1y = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)'], $valores[6][0][0]['COUNT(*)']);
	    
	    $data2y = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)'], $valores2[6][0][0]['COUNT(*)']);
		//$data1y=array(47,80,40,116, 12, 20, 60);
		//$data2y=array(61,30,82,105, 12, 90, 130);
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    //$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135,1));
		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    // Create the linear plot
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

	    // Create the bar plots
		$b1plot = new BarPlot($data1y);
		$b2plot = new BarPlot($data2y);

		// Create the grouped bar plot
		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
		// ...and add it to the graPH
		$graph->Add($gbplot);


		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#cc1111");
		$b1plot->SetLegend('Produtos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#11cccc");
		$b2plot->SetLegend('Serviços');

		$graph->title->Set("Anúncios na Semana");
	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/anunciosSem.png";
	    $graph->img->Stream($fileName);

	    // Send it back to browser
	    //$graph->img->Headers();
	    //$graph->img->Stream();
	}

	public function anunciosAno() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

		$data[0] = date('d/m/Y', strtotime("-11 month"));
		$data[1] = date('d/m/Y', strtotime("-10 month"));
		$data[2] = date('d/m/Y', strtotime("-9 month"));
		$data[3] = date('d/m/Y', strtotime("-8 month"));
		$data[4] = date('d/m/Y', strtotime("-7 month"));
		$data[5] = date('d/m/Y', strtotime("-6 month"));
		$data[6] = date('d/m/Y', strtotime("-5 month"));
		$data[7] = date('d/m/Y', strtotime("-4 month "));
		$data[8] = date('d/m/Y', strtotime("-3 month "));
		$data[9] = date('d/m/Y', strtotime("-2 month "));
		$data[10] = date('d/m/Y', strtotime("-1 month "));
		$data[11] = date('d/m/Y');
		//debug($data) or die();

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));
		$data2[7] = implode("-",array_reverse(explode("/",$data[7])));
		$data2[8] = implode("-",array_reverse(explode("/",$data[8])));
		$data2[9] = implode("-",array_reverse(explode("/",$data[9])));
		$data2[10] = implode("-",array_reverse(explode("/",$data[10])));
		$data2[11] = implode("-",array_reverse(explode("/",$data[11])));

	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[0]."' AND `produtos`.`Data_Publicacao` < '".$data2[1]."' AND `produtos`.`Expirado` = 0;";
	    $valores[0] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[1]."' AND `produtos`.`Data_Publicacao` < '".$data2[2]."' AND `produtos`.`Expirado` = 0;";
	    $valores[1] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[2]."' AND `produtos`.`Data_Publicacao` < '".$data2[3]."' AND `produtos`.`Expirado` = 0;";
	    $valores[2] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[3]."' AND `produtos`.`Data_Publicacao` < '".$data2[4]."' AND `produtos`.`Expirado` = 0;";
		$valores[3] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[4]."' AND `produtos`.`Data_Publicacao` < '".$data2[5]."' AND `produtos`.`Expirado` = 0;";
		$valores[4] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[5]."' AND `produtos`.`Data_Publicacao` < '".$data2[6]."' AND `produtos`.`Expirado` = 0;";
		$valores[5] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[6]."' AND `produtos`.`Data_Publicacao` < '".$data2[7]."' AND `produtos`.`Expirado` = 0;";
		$valores[6] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[7]."' AND `produtos`.`Data_Publicacao` < '".$data2[8]."' AND `produtos`.`Expirado` = 0;";
		$valores[7] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[8]."' AND `produtos`.`Data_Publicacao` < '".$data2[9]."' AND `produtos`.`Expirado` = 0;";
		$valores[8] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[9]."' AND `produtos`.`Data_Publicacao` < '".$data2[10]."' AND `produtos`.`Expirado` = 0;";
		$valores[9] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` >= '".$data2[10]."' AND `produtos`.`Data_Publicacao` < '".$data2[11]."' AND `produtos`.`Expirado` = 0;";
		$valores[10] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Data_Publicacao` = '".$data2[11]."' AND `produtos`.`Expirado` = 0;";
		$valores[11] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[0]."' AND `servicos`.`Data_Publicacao` < '".$data2[1]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[0] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[1]."' AND `servicos`.`Data_Publicacao` < '".$data2[2]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[1] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[2]."' AND `servicos`.`Data_Publicacao` < '".$data2[3]."' AND `servicos`.`Expirado` = 0;";
	    $valores2[2] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[3]."' AND `servicos`.`Data_Publicacao` < '".$data2[4]."' AND `servicos`.`Expirado` = 0;";
		$valores2[3] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[4]."' AND `servicos`.`Data_Publicacao` < '".$data2[5]."' AND `servicos`.`Expirado` = 0;";
		$valores2[4] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[5]."' AND `servicos`.`Data_Publicacao` < '".$data2[6]."' AND `servicos`.`Expirado` = 0;";
		$valores2[5] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[6]."' AND `servicos`.`Data_Publicacao` < '".$data2[7]."' AND `servicos`.`Expirado` = 0;";
		$valores2[6] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[7]."' AND `servicos`.`Data_Publicacao` < '".$data2[8]."' AND `servicos`.`Expirado` = 0;";
		$valores2[7] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[8]."' AND `servicos`.`Data_Publicacao` < '".$data2[9]."' AND `servicos`.`Expirado` = 0;";
		$valores2[8] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[9]."' AND `servicos`.`Data_Publicacao` < '".$data2[10]."' AND `servicos`.`Expirado` = 0;";
		$valores2[9] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` >= '".$data2[10]."' AND `servicos`.`Data_Publicacao` < '".$data2[11]."' AND `servicos`.`Expirado` = 0;";
		$valores2[10] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Data_Publicacao` = '".$data2[11]."' AND `servicos`.`Expirado` = 0;";
		$valores2[11] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
		
	    $ydata = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']
	    				 , $valores[6][0][0]['COUNT(*)'], $valores[7][0][0]['COUNT(*)'], $valores[8][0][0]['COUNT(*)']
	    				 , $valores[9][0][0]['COUNT(*)'], $valores[10][0][0]['COUNT(*)'], $valores[11][0][0]['COUNT(*)']);
	    
	    $ydatas = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']
	    				  , $valores2[6][0][0]['COUNT(*)'] , $valores2[7][0][0]['COUNT(*)'] , $valores2[8][0][0]['COUNT(*)']
	    				   , $valores2[9][0][0]['COUNT(*)'] , $valores2[10][0][0]['COUNT(*)'] , $valores2[11][0][0]['COUNT(*)']);
	    // Create the graph. These two calls are always required
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    for($i = 0; $i < 12; $i++) {
	    	if(substr($data[$i], 3, 2) == "01") { $data[$i] = "Jan"; }
	    	if(substr($data[$i], 3, 2) == "02") { $data[$i] = "Fev"; }
	    	if(substr($data[$i], 3, 2) == "03") { $data[$i] = "Mar"; }
	    	if(substr($data[$i], 3, 2) == "04") { $data[$i] = "Abr"; }
	    	if(substr($data[$i], 3, 2) == "05") { $data[$i] = "Mai"; }
	    	if(substr($data[$i], 3, 2) == "06") { $data[$i] = "jun"; }
	    	if(substr($data[$i], 3, 2) == "07") { $data[$i] = "Jul"; }
	    	if(substr($data[$i], 3, 2) == "08") { $data[$i] = "Ago"; }
	    	if(substr($data[$i], 3, 2) == "09") { $data[$i] = "Set"; }
	    	if(substr($data[$i], 3, 2) == "10") { $data[$i] = "Out"; }
	    	if(substr($data[$i], 3, 2) == "11") { $data[$i] = "Nov"; }
	    	if(substr($data[$i], 3, 2) == "12") { $data[$i] = "Dez"; }
	    }

	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    // Create the linear plot
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

	    // Create the bar plots
		$b1plot = new BarPlot($ydata);
		$b2plot = new BarPlot($ydatas);

		// Create the grouped bar plot
		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
		// ...and add it to the graPH
		$graph->Add($gbplot);


		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#cc1111");
		$b1plot->SetLegend('Produtos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#11cccc");
		$b2plot->SetLegend('Serviços');

		$graph->title->Set("Anúncios no Ano");
	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/anunciosAno.png";
	    $graph->img->Stream($fileName);
	}

	public function anuciosProdutosServicos() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_pie');
    	App::import('Vendor', 'jpgraph/jpgraph_pie3d');

	    $qtd = "SELECT COUNT(*) FROM `produtos` WHERE `produtos`.`Bloqueado` = 0;";
	    $data[0] = $this->requestAction('/produtos/buscaProdutos/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `servicos` WHERE `servicos`.`Bloqueado` = 0;";
	    $data[1] = $this->requestAction('/servicos/buscaServicos/'.$qtd);
//debug($data) or die();
	    $graph = new PieGraph(350,250);

		$theme_class= new VividTheme;
		$graph->SetTheme($theme_class);

		// Set A title for the plot
		$graph->title->Set("Porcentagem de Produtos e Serviços");

		// Create
		$p1 = new PiePlot3D(array($data[0][0][0]['COUNT(*)'], $data[1][0][0]['COUNT(*)']));
		$graph->Add($p1);

		$p1->ShowBorder();
		$p1->SetColor('black');
		$p1->ExplodeSlice(1);

		$gdImgHandler = $graph->Stroke(_IMG_HANDLER);

		$fileName = "img/relatorios/produtosServicos.png";
		$graph->img->Stream($fileName);
	}

	public function usuarios(){
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_bar');

		$data[0] = date('d/m/Y', strtotime("-25 days"));
		$data[1] = date('d/m/Y', strtotime("-20 days"));
		$data[2] = date('d/m/Y', strtotime("-15 days"));
		$data[3] = date('d/m/Y', strtotime("-10 days"));
		$data[4] = date('d/m/Y', strtotime("-5 days"));
		$data[5] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));

	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 0;";
	    $valores[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 0;";
	    $valores[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 0;";
	    $valores[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 0;";
		$valores[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 0;";
		$valores[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[5]."' AND `usuarios`.`Strikes` = 0;";
		$valores[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 1;";
	    $valores2[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 1;";
	    $valores2[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 1;";
	    $valores2[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 1;";
		$valores2[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 1;";
		$valores2[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[5]."' AND `usuarios`.`Strikes` = 1;";
		$valores2[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
  
  	    $data1y = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']);
	    
	    $data2y = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']);

	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

		$b1plot = new BarPlot($data2y);
		$b2plot = new BarPlot($data1y);

		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));

		$graph->Add($gbplot);

		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#008B00");
		$b1plot->SetLegend('Usuários Ativos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#8B0000");
		$b2plot->SetLegend('Usuários Bloqueados');

		$graph->title->Set("Últimos Usuários");

	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    $fileName = "img/relatorios/ultimosUsuarios.png";
	    $graph->img->Stream($fileName);
	}

	public function usuariosSem(){
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_bar');

		$data[0] = date('d/m/Y', strtotime("-6 days"));
		$data[1] = date('d/m/Y', strtotime("-5 days"));
		$data[2] = date('d/m/Y', strtotime("-4 days"));
		$data[3] = date('d/m/Y', strtotime("-3 days"));
		$data[4] = date('d/m/Y', strtotime("-2 days"));
		$data[5] = date('d/m/Y', strtotime("-1 days"));
		$data[6] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));

	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 1;";
		$valores[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 1;";
		$valores[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[5]."' AND `usuarios`.`created` < '".$data2[6]."' AND `usuarios`.`Strikes` = 1;";
		$valores[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[6]."' AND `usuarios`.`Strikes` = 1;";
		$valores[6] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[5]."' AND `usuarios`.`created` < '".$data2[6]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[6]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[6] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
  
  	    $data1y = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)'], $valores[6][0][0]['COUNT(*)']);
	    
	    $data2y = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)'], $valores2[6][0][0]['COUNT(*)']);
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

		$b1plot = new BarPlot($data2y);
		$b2plot = new BarPlot($data1y);

		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));

		$graph->Add($gbplot);

		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#008B00");
		$b1plot->SetLegend('Usuários Ativos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#8B0000");
		$b2plot->SetLegend('Usuários Bloqueados');

		$graph->title->Set("Últimos Usuários");

	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    $fileName = "img/relatorios/usuariosSem.png";
	    $graph->img->Stream($fileName);
	}

	public function usuariosAno() {
		App::import('Vendor', 'jpgraph/jpgraph');
    	App::import('Vendor', 'jpgraph/jpgraph_line');

		$data[0] = date('d/m/Y', strtotime("-11 month"));
		$data[1] = date('d/m/Y', strtotime("-10 month"));
		$data[2] = date('d/m/Y', strtotime("-9 month"));
		$data[3] = date('d/m/Y', strtotime("-8 month"));
		$data[4] = date('d/m/Y', strtotime("-7 month"));
		$data[5] = date('d/m/Y', strtotime("-6 month"));
		$data[6] = date('d/m/Y', strtotime("-5 month"));
		$data[7] = date('d/m/Y', strtotime("-4 month "));
		$data[8] = date('d/m/Y', strtotime("-3 month "));
		$data[9] = date('d/m/Y', strtotime("-2 month "));
		$data[10] = date('d/m/Y', strtotime("-1 month "));
		$data[11] = date('d/m/Y');

		$data2[0] = implode("-",array_reverse(explode("/",$data[0])));
		$data2[1] = implode("-",array_reverse(explode("/",$data[1])));
		$data2[2] = implode("-",array_reverse(explode("/",$data[2])));
		$data2[3] = implode("-",array_reverse(explode("/",$data[3])));
		$data2[4] = implode("-",array_reverse(explode("/",$data[4])));
		$data2[5] = implode("-",array_reverse(explode("/",$data[5])));
		$data2[6] = implode("-",array_reverse(explode("/",$data[6])));
		$data2[7] = implode("-",array_reverse(explode("/",$data[7])));
		$data2[8] = implode("-",array_reverse(explode("/",$data[8])));
		$data2[9] = implode("-",array_reverse(explode("/",$data[9])));
		$data2[10] = implode("-",array_reverse(explode("/",$data[10])));
		$data2[11] = implode("-",array_reverse(explode("/",$data[11])));

	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 1;";
	    $valores[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 1;";
		$valores[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 1;";
		$valores[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[5]."' AND `usuarios`.`created` < '".$data2[6]."' AND `usuarios`.`Strikes` = 1;";
		$valores[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[6]."' AND `usuarios`.`created` < '".$data2[7]."' AND `usuarios`.`Strikes` = 1;";
		$valores[6] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[7]."' AND `usuarios`.`created` < '".$data2[8]."' AND `usuarios`.`Strikes` = 1;";
		$valores[7] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[8]."' AND `usuarios`.`created` < '".$data2[9]."' AND `usuarios`.`Strikes` = 1;";
		$valores[8] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[9]."' AND `usuarios`.`created` < '".$data2[10]."' AND `usuarios`.`Strikes` = 1;";
		$valores[9] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[10]."' AND `usuarios`.`created` < '".$data2[11]."' AND `usuarios`.`Strikes` = 1;";
		$valores[10] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[11]."' AND `usuarios`.`Strikes` = 1;";
		$valores[11] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);

		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[0]."' AND `usuarios`.`created` < '".$data2[1]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[0] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[1]."' AND `usuarios`.`created` < '".$data2[2]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[1] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
	    $qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[2]."' AND `usuarios`.`created` < '".$data2[3]."' AND `usuarios`.`Strikes` = 0;";
	    $valores2[2] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[3]."' AND `usuarios`.`created` < '".$data2[4]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[3] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[4]."' AND `usuarios`.`created` < '".$data2[5]."' AND `usuarios`.`Strikes` = 1;";
		$valores2[4] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[5]."' AND `usuarios`.`created` < '".$data2[6]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[5] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[6]."' AND `usuarios`.`created` < '".$data2[7]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[6] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[7]."' AND `usuarios`.`created` < '".$data2[8]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[7] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[8]."' AND `usuarios`.`created` < '".$data2[9]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[8] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[9]."' AND `usuarios`.`created` < '".$data2[10]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[9] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` >= '".$data2[10]."' AND `usuarios`.`created` < '".$data2[11]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[10] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		$qtd = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`created` = '".$data2[11]."' AND `usuarios`.`Strikes` = 0;";
		$valores2[11] = $this->requestAction('/usuarios/buscaUsuarios/'.$qtd);
		
	    $ydata = array($valores[0][0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']
	    				 , $valores[6][0][0]['COUNT(*)'], $valores[7][0][0]['COUNT(*)'], $valores[8][0][0]['COUNT(*)']
	    				 , $valores[9][0][0]['COUNT(*)'], $valores[10][0][0]['COUNT(*)'], $valores[11][0][0]['COUNT(*)']);
	    
	    $ydatas = array($valores2[0][0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
	    				 $valores2[3][0][0]['COUNT(*)'] , $valores2[4][0][0]['COUNT(*)'] , $valores2[5][0][0]['COUNT(*)']
	    				  , $valores2[6][0][0]['COUNT(*)'] , $valores2[7][0][0]['COUNT(*)'] , $valores2[8][0][0]['COUNT(*)']
	    				   , $valores2[9][0][0]['COUNT(*)'] , $valores2[10][0][0]['COUNT(*)'] , $valores2[11][0][0]['COUNT(*)']);
	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

	    for($i = 0; $i < 12; $i++) {
	    	if(substr($data[$i], 3, 2) == "01") { $data[$i] = "Jan"; }
	    	if(substr($data[$i], 3, 2) == "02") { $data[$i] = "Fev"; }
	    	if(substr($data[$i], 3, 2) == "03") { $data[$i] = "Mar"; }
	    	if(substr($data[$i], 3, 2) == "04") { $data[$i] = "Abr"; }
	    	if(substr($data[$i], 3, 2) == "05") { $data[$i] = "Mai"; }
	    	if(substr($data[$i], 3, 2) == "06") { $data[$i] = "jun"; }
	    	if(substr($data[$i], 3, 2) == "07") { $data[$i] = "Jul"; }
	    	if(substr($data[$i], 3, 2) == "08") { $data[$i] = "Ago"; }
	    	if(substr($data[$i], 3, 2) == "09") { $data[$i] = "Set"; }
	    	if(substr($data[$i], 3, 2) == "10") { $data[$i] = "Out"; }
	    	if(substr($data[$i], 3, 2) == "11") { $data[$i] = "Nov"; }
	    	if(substr($data[$i], 3, 2) == "12") { $data[$i] = "Dez"; }
	    }

	    $graph = new Graph(655,450);
	    $graph->SetScale('textlin');

		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);
		$graph->xaxis->SetTickLabels($data);
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

	    // Create the linear plot
	    $theme_class=new UniversalTheme;
		$graph->img->SetAntiAliasing(false);
		$graph->SetBox(false);

	    // Create the bar plots
		$b1plot = new BarPlot($ydatas);
		$b2plot = new BarPlot($ydata);

		// Create the grouped bar plot
		$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
		// ...and add it to the graPH
		$graph->Add($gbplot);


		$b1plot->SetColor("white");
		$b1plot->SetFillColor("#008B00");
		$b1plot->SetLegend('Usuários Ativos');

		$b2plot->SetColor("white");
		$b2plot->SetFillColor("#8B0000");
		$b2plot->SetLegend('Usuários Bloqueados');

		$graph->title->Set("Usuários Cadastrados no Ano");
	    // Get the handler to prevent the library from sending the
	    // image to the browser
	    $gdImgHandler = $graph->Stroke(_IMG_HANDLER);

	    // Stroke image to a file

	    // Default is PNG so use ".png" as suffix
	    $fileName = "img/relatorios/usuariosAno.png";
	    $graph->img->Stream($fileName);
	}

} 