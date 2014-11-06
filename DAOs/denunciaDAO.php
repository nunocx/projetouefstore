<?php
	require_once('MySqlClass.php');
	conexao();
	
	function _inserir($Texto, $Data,$Produto_Id,$Servico_Id,$Usuario_id)
	{
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
`usuario_id`)VALUES (NULL ,  '$Texto',  '$Data',  '$Produto_Id',  '$Servico_Id',  NULL);";

		$sql2_inserir = "INSERT INTO  `u961758316_uefs`.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
`usuario_id`)VALUES (NULL ,  '$Texto',  '$Data',  '$Produto_Id',  NULL,  '$Usuario_id');";
		
		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			if(mysql_query($sql2_inserir)){
				return TRUE;
			}
			else{
				return FALSE;
			}
			
		}
	}
	function _update($Texto,$Data,$Usuario_Email,$Produto_idProduto,$Servico_IdServico)
	{
		$sql_update = "UPDATE denuncias 
						SET Texto = '$Texto',
							Data = '$Data',
							Usuario_Email = '$Usuario_Email',
							Produto_idProduto = '$Produto_idProduto',
							Servico_IdServico = '$Servico_IdServico'
						WHERE idDenuncia = '$idDenuncia';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findDenuncia($idDenuncia)
	{
		$sql = "SELECT * FROM Denuncias";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['idDenuncia']==$idDenuncia)
				return $ln;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function _delete($idDenuncia)
	{
		$sql = " DELETE FROM reports WHERE id = '$idDenuncia';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>

