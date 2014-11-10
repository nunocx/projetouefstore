<?php
	require_once('BancoDados.php');
conexao();



	
	function _inserir($Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto)
	{	

		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`administradors` (`id` ,`Email` ,`name` ,`Senha` ,`Telefone1` ,`Telefone2` ,
`Data_Nascimento` ,`Foto` ,`Status`)
VALUES (NULL ,  '$Email',  '$Nome',  '$Senha',  'Telefone1',  '$Telefone2',  '$Data_Nascimento',  'oivr',  '1');";
		
		if(mysql_query($sql_inserir))
		{ 
			return TRUE;		
		}
		else
		{
			return FALSE;
		}
	}
	function _update($id,$Email,$Nome,$Senha,$Telefone1,$Telefone2,$Data_Nascimento,$Foto,$Status)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`administradors`
		SET 
		`Email` =  '$Email',
		`name` =  '$Nome',`Senha` =  '$Senha',
`Telefone1` =  '$Telefone1',`Telefone2` =  '%Telefone2',`Data_Nascimento` =  '$Data_Nascimento',`Foto` =  '$Foto',
`Status` =  '$Status' WHERE  `administradors`.`id` ='$id';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findAdm($id)
	{
		$sql = "SELECT * FROM administradors";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id'] == $id)
				return $ln;
	}

	function _delete($id)
	{
		$sql = " DELETE FROM administradors WHERE id = '$id';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>

