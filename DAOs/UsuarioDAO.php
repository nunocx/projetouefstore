<?php
	require_once('MySqlClass.php');
	conexao();



	
	function _inserir($Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto,$Sexo )
	{

		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`usuarios` VALUES (
NULL ,  '$Email',  '$Nome',  '$Senha',  '$Telefone1',  '$Data_Nascimento',  '$Sexo',  '$Telefone2',  '$Foto',  '0',  '0',  '0',  '0'
);";
		
		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _update($Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto,$Sexo)
	{
		$sql_update = "	UPDATE  `u961758316_uefs`.`usuarios`
		SET  
		`Email` =  '$Email',
		`name` = '$Nome',
		`Senha` = '$Senha',
		`Telefone1` = '$Telefone1',
		`Telefone2` = '$Telefone2',
		`Sexo` = '$Sexo',
		`Foto` = '$Foto',
		`Data_Nascimento` = '$Data_Nascimento'
		WHERE `usuarios`.`Email` =  '$Email';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findUser($Email)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`usuarios`;";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$Email)
				return $ln;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function _delete($Email)
	{
		$sql = " DELETE FROM `u961758316_uefs`.`usuarios` WHERE Email = '$Email';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>

