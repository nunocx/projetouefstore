<?php
	require_once('MySqlClass.php');
	conexao();



	
	function _inserir($Data, $Texto,$Usuario_id,$Servico_id,$Produto_id)
	{
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`comentarios` (`id` ,`Data` ,`Texto` ,`usuario_id` ,
`servico_id` ,`produto_id`)VALUES (NULL ,  '$Data',  '$Texto',  '$Usuario_id', NULL ,  '$Produto_id');";

		$sql2_inserir = "INSERT INTO  `u961758316_uefs`.`comentarios` (`id` ,`Data` ,`Texto` ,`usuario_id` ,
`servico_id` ,`produto_id`)VALUES (NULL ,  '$Data',  '$Texto',  '$Usuario_id', '$Servico_id' ,  NULL);";
		
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
	function _update($id,$Texto)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`comentarios`
		SET 
		`Texto` = '$Texto'
		WHERE  `comentarios`.`id` = $id;";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	function _findComentario($IdComentario)
	{
		$sql = "SELECT * FROM Usuarios";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$IdComentario)
				return $ln;
	}

	function _delete($IdComentario)
	{
		$sql = "DELETE FROM comentarioprodutos WHERE IdComentario = '$IdComentario';";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>

