<?php
	require_once('MySqlClass.php');
	conexao();
        
	function inserir($nome)
	{
		$sql_inserir = "INSERT INTO  `".getBD()."`.`categories` VALUES (NULL ,  '$nome');";
        	 return (mysql_query($sql_inserir))?TRUE:FALSE;
	}
	function update($id, $nome)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`categories` 
                 SET 
		`name` =  '$nome'
		WHERE  `categories`.`id` = '$id';";
		return (mysql_query($sql_update))? TRUE:FALSE;
	}
	function recuperarCategoria($categoria)
	{
		$sql = "SELECT * FROM categories";
		$sql_sel = mysql_query($sql);
		while($ln = mysql_fetch_array($sql_sel))
                    if($ln['name']==$categoria)
			return $ln;
	}
	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function deleta($id)
	{
		$sql = "DELETE FROM `u961758316_uefs`.`categories` WHERE `categories`.`id` = $id";
                    return (mysql_query($sql))? TRUE:FALSE;
	}

?>

