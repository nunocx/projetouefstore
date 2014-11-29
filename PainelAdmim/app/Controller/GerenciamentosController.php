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
	    $valores = $this->requestAction('/produtos/buscaProdutos/'.$qtd);
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
	    $valores2 = $this->requestAction('/servicos/buscaServicos/'.$qtd);
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
  
  	    $data1y = array($valores[0][0]['COUNT(*)'], $valores[1][0][0]['COUNT(*)'] , $valores[2][0][0]['COUNT(*)'] ,
	    				 $valores[3][0][0]['COUNT(*)'] , $valores[4][0][0]['COUNT(*)'] , $valores[5][0][0]['COUNT(*)']);
	    
	    $data2y = array($valores2[0][0]['COUNT(*)'], $valores2[1][0][0]['COUNT(*)'] , $valores2[2][0][0]['COUNT(*)'] ,
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

} 