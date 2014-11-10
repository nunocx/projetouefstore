<?php
	require_once('BancoDados.php');
        connectar();
        
	function inserir($nome)
	{
		$sql = "INSERT INTO  `u961758316_uefs`.`categories` VALUES (NULL ,  '$nome');";
        	 return (mysql_query($sql))?TRUE:FALSE;
	}
	function update($id, $nome)
	{
		$sql = "UPDATE  `u961758316_uefs`.`categories` 
                 SET 
		`name` =  '$nome'
		WHERE  `categories`.`id` = '$id';";
		return (mysql_query($sql))? TRUE:FALSE;
	}
	function recuperarCategoria($nome)
	{
		$sql = "SELECT * FROM categories";
		$sql_sel = mysql_query($sql);
		while($ln = mysql_fetch_array($sql_sel))
                    if($ln['name']==$nome)
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

