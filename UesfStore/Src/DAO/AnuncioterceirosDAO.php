<?php
	require_once('MySqlClass.php');
	conexao();

	
	function _inserir($Nome,$NomeEmpresa,$Imagem,$ValorPago,$DataInicio,$link,$Categoria,$Id_Adm)
	{
		$data = date('d/m/y');
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`anuncioterceiros` (`id` ,`name` ,`NomeEmpresa` ,`Imagem` ,`ValorPago` ,
`DataInicio` ,`link` ,`category_id` ,`administrador_id`)
VALUES (NULL ,  '$Nome',  '$NomeEmpresa',  '$Imagem',  '$ValorPago', '$link',  '$Categoria',  '$Id_Adm');";

		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _update($idAnuncioTerceiro, $Nome, $NomeEmpresa, $Imagem, $ValorPago, $DataInicio, $link, $Id_Categoria, $Administrador_Id)
	{
		$sql_update = "UPDATE `anuncioterceiros` SET
		`administrador_id` = '$Administrador_Id'
		`name`= '$NomeEmpresa',
		`NomeEmpresa`= '$NomeEmpresa',
		`Imagem`= '$Imagem',
		`ValorPago`='$ValorPago',
		`DataInicio`='$DataInicio',
		`link`='$link',
		`category_id`='$Id_Categoria'
		WHERE `id` = '$idAnuncioTerceiro';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findUser($idAnuncioTerceiro)
	{
		$sql = "SELECT * FROM anuncioterceiros";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['anuncioterceiros']==$anuncioterceiros)
				return $ln;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function _delete($idAnuncioTerceiro)
	{
		$sql = "DELETE FROM anuncioterceiros WHERE idAnuncioTerceiro = '$idAnuncioTerceiro';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}

?>

