<?php
	require_once('MySqlClass.php');
	conexao();

	
	function _inserir($Nome)
	{
		$data = date('d/m/y');
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`categories` (`id` ,`name`)VALUES (NULL ,  '$Nome');";

		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _update($id, $Nome)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`categories` SET 
		`name` =  '$Nome'
		WHERE  `categories`.`id` = '$id';";

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
	function _delete($id)
	{
		$sql = "DELETE FROM `u961758316_uefs`.`categories` WHERE `categories`.`id` = $id";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}

?>

