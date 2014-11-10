<?php
	require_once('MySqlClass.php');
	conexao();



	
	function _inserir($Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto)
	{	

		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`administradors` (`id` ,`Email` ,`name` ,`Senha` ,`Telefone1` ,`Telefone2` ,
`Data_Nascimento` ,`Foto` ,`Status`)
VALUES (NULL ,  '$Email',  '$Nome',  '$Senha',  'Telefone1',  '$Telefone2',  '$Data_Nascimento',  'oivr',  '1');";
		
		return (mysql_query($sql_inserir))?TRUE:FALSE;
	}
	function update($id,$Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto,$Status)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`administradors`
		SET 
		`Email` =  '$Email',
		`name` =  '$Nome',`Senha` =  '$Senha',
`Telefone1` =  '$Telefone1',`Telefone2` =  '%Telefone2',`Data_Nascimento` =  '$Data_Nascimento',`Foto` =  '$Foto',
`Status` =  '$Status' WHERE  `administradors`.`id` ='$id';";

		return (mysql_query($sql_update))?TRUE:FALSE;
	}
	function recuperarAdmin($id)
	{
		$sql = "SELECT * FROM administradors";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id'] == $id)
				return $ln;
	}

	function deleta($id)
	{
		$sql = " DELETE FROM administradors WHERE id = '$id';";
			return (mysql_query($sql))?TRUE:FALSE;
	}



?>

