<?php
	require_once('MySqlClass.php');
	conexao();


	function inserir($Data, $Texto,$Usuario_id,$Servico_id,$Produto_id)
	{
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`comentarios` VALUES (NULL ,  '$Data',  '$Texto',  '$Usuario_id', NULL ,  '$Produto_id');";
		$sql2_inserir = "INSERT INTO  `u961758316_uefs`.`comentarios` VALUES (NULL ,  '$Data',  '$Texto',  '$Usuario_id', '$Servico_id' ,  NULL);";
		
		return (mysql_query($sql_inserir)) ? TRUE :((mysql_query($sql2_inserir))?TRUE:FALSE);
                /*if(mysql_query($sql_inserir))
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
		}*/
	}
	function update($id,$Texto)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`comentarios`
		SET 
		`Texto` = '$Texto'
		WHERE  `comentarios`.`id` = $id;";
                    return (mysql_query($sql_update)) ? TRUE:FALSE;
	}
	function recuperarComentario($IdComentario)
	{
		$sql = "SELECT * FROM Usuarios";
		$sql_sel = mysql_query($sql);

                while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$IdComentario)
				return $ln;
	}

	function deleta($IdComentario)
	{
		$sql = "DELETE FROM comentarioprodutos WHERE IdComentario = '$IdComentario';";
			return (mysql_query($sql)) ? TRUE:FALSE;
	}



?>

