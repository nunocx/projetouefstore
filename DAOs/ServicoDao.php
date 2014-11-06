<?php
	require_once('MySqlClass.php');
	conexao();



	
	function _inserir($Nome, $Descricao,$Preco, $Foto_Video, $Categoria,$ACombinar, $Usuario_Id)
	{

		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`servicos` (`id` ,`name` ,`Descricao` ,`Preco` ,`Data_Publicacao` ,
`Data_Vencimento` ,`Foto_Video` ,`Bloqueado` ,`Expirado` ,`ACombinar` ,`usuario_id` ,`category_id`)
VALUES (NULL ,  '$Nome',  '$Descricao',  '$Preco','2014-11-19',  '2014-11-19',  '$Foto_Video',  '0',  '0',  '$ACombinar',  '$Usuario_Id',  '$Categoria');";
		
		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}		
	function _update($IdServico, $Nome, $Categoria, $Descricao, $Preco, $Foto_Video, $ACombinar)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`servicos`
		SET 
		`name` =  '$Nome',
		`Descricao` =  '$Descricao',
		`Preco` =  '$Preco',
		`Foto_Video` =  '$Foto_Video',
		`ACombinar` = '$ACombinar'
		/*`category_id` = '$Categoria'*/
		WHERE 
		`servicos`.`id` = '$IdServico';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findServico($IdServico)
	{
		$sql = "SELECT * FROM servicos";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id'] == $IdServico)
				return $ln;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function _delete($IdServico)
	{
		$sql = "DELETE FROM servicos WHERE id = '$IdServico';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>

