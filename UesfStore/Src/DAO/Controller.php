<?php
	include('BancoDados.php');
	include('UsuarioDAO.php');
	include('ProdutoDAO.php');
	include('ServicoDAO.php');
	include('AdminDAO.php');
	include('DenunciaDAO.php');
  	include('CategoriesDAO.php');
  	include('AnuncioTerceiroDAO.php');
 
	$UEFStoreBD = new BancoDados('localhost','u961758316_uefs','root','');
	
	$UEFStoreBD->conectar();
	$UEFStoreBD->selecionarDB();

	/**   USUARIO FUNCIONANDO DAO
	$UsuarioPhant = new UsuarioDAO($UEFStoreBD->getDB());

	//$UEFStoreBD->set('sql',$UsuarioPhant->inserir('arthru X','arthurX','M','telefone','celular','senha','foto','0'));
	//$UEFStoreBD->executar();

	$UEFStoreBD->set('sql',$UsuarioPhant->atualizar('169','arthur','arthurX','S','telefones','celulars','senhas','fotos','1'));
	$UEFStoreBD->executar();
	$l = $UsuarioPhant->recuperarUsuario('arthurX');
	$l = $UsuarioPhant->buscarUsuarios('no');

	foreach ($l as $ls) {
		echo '<br />'.($ls['name'].'<br />') ;
		
	}
	$sql = $UsuarioPhant->deleta('arthurX');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();
*/
/*	PRDOTUO FUNCIONANDO DAO
	echo 	date('Y-m-d');
	$ProdutoPhant = new ProdutoDAO($UEFStoreBD->getDB());
	//$sql = $ProdutoPhant->inserir('camisa','1','10.00','foto','ola','11','1');
	//$UEFStoreBD->set('sql',$sql);
	//$UEFStoreBD->executar();
atualizar('2','MUDOU','9','18999.99','VIDEO','DesMUDOU','11','1');
	//$sql = $ProdutoPhant->atualizar('3','camisA Sloomdd','1','10000.00','video','alo','11','1');
	//$UEFStoreBD->set('sql',$sql);
	//$UEFStoreBD->executar();
	
	//$sql = $ProdutoPhant->deleta('3');
	//$UEFStoreBD->set('sql',$sql);
	//$UEFStoreBD->executar();
*/
/*
	$ServicoPhant = new ServicoDAO($UEFStoreBD->getDB());

	//$sql = $ServicoPhant->inserir('ServicoTest','1','9.99','FOTO','Descricao do servico','11','0');
	//$sql = $ServicoPhant->atualizar('3','MUDOU','2','18999.99','VIDEO','DesMUDOU','11','1');
	
	$l = $ServicoPhant->buscarServicos('MU');

	foreach ($l as $ls) {
		echo '<br />'.($ls['name'].'<br />') ;
		
	}
	$sql = $ServicoPhant->deleta('2');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();
*/
/* ADMIN FUNCIONANDO DAO
	$AdminPhant = new AdminDAO($UEFStoreBD->getDB());
	
	for($i = 0 ; $i<10; $i++)
	{
		$sql = $AdminPhant->inserir('arthutadmin'.$i,'arthu hagnes'.$i,'ksoksaoas'.$i,'926731212','33932323923','mypicture'.$i);
		$UEFStoreBD->set('sql',$sql);
		$UEFStoreBD->executar();
	}
	//atualizar($id,$email,$nome,$senha,$telefone,$celular,$foto,$status)
	//$sql = $AdminPhant->atualizar('1','arthutadmin','arthus hagnes','kscvvvvvvvvs','3333333','111111111','asassasa','0');

	$l = $AdminPhant->buscarAdmins('arth');

	foreach ($l as $ls) {
		echo '<br />'.($ls['name'].'<br />') ;
		
	}

	$sql = $AdminPhant->deleta('arthutadmin2');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();
*/
/*	
	DENUNCIA FUNCIONANDO DAO
	$DenunciaPhant = new DenunciaDAO( $UEFStoreBD->getDB() );



	//$sql = $DenunciaPhant->inserir('esse sacana me roubou','1000-10-10','2','NULL', '11');
	//$sql = $DenunciaPhant->inserir('esse sacana me roubou','1000-10-10','NULL','1', '11');
	//$sql = $DenunciaPhant->atualizar('7','bbbb','1020-10-10','11','NULL',null);
	//echo $sql;
								//($idDenuncia,$texto,$data,$usuario_id,$produto_id,$servico_id)
	
//inserir($texto, $data,$produto_id,$servico_id,$usuario_id)
	$sql = $DenunciaPhant->deleta('6');

	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();

*/
/*	
	Categoria FUNCIONANDO DAO

	$Categ = new CategoriesDAO( $UEFStoreBD->getDB() );
	$sql = $Categ->inserir('Arthur');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();

	$sql = $Categ->inserir('tarsis');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();

	$sql = $Categ->inserir('Len');
	$UEFStoreBD->set('sql',$sql);
	$UEFStoreBD->executar();
*/
/*
	ANUNCIO TERCEIRO FUNCIONANDO DAO
	$anuncioPhat = new AnuncioTerceiroDAO( $UEFStoreBD->getDB());

//	$sql = $anuncioPhat->inserir('nome','nomeemp','ima','10000.0','1','link','2');
	//atualizar($id, $nome, $nomeEmpresa, $imagem, $valorPago, $link, $category_id, $admin_id)
	//$sql = $anuncioPhat->atualizar('1','OLa','OLA','Ima','22.0','linkss','1','1');
	
	//($nome,$nomeDaEmpresa,$imagem,$valorPago,$admin_id,$link,$category_id)
	//$UEFStoreBD->executarSQL($anuncioPhat->deleta('1'));
*/

	
?>
