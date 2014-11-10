<?php
	require_once('BancoDados.php');
        connectar();

	function inserirComentario($texto,$usuario_id,$servico_id,$produto_id)
	{
            $data = date('Y-m-d');
        }
         if($usuario_id != NULL)
	 {
	    if($servico_id != 'NULL')
	    {
		$sql = "INSERT INTO  `u961758316_uefs`.`comentarios` (`id` ,`Data` ,`Texto` ,`usuario_id` ,
                `servico_id` ,`produto_id`)
                VALUES (NULL ,  '$data',  '$texto',  '$usuario_id', NULL ,  '$produto_id');";
            }else if($produto_id != 'NULL')
            {
                $sql = "INSERT INTO  `u961758316_uefs`.`comentarios` (`id` ,`Data` ,`Texto` ,`usuario_id` ,
                `servico_id` ,`produto_id`)
                VALUES (NULL ,  '$data',  '$texto',  '$usuario_id', '$servico_id' ,  NULL);";
            }
		return (mysql_query($sql)) ? TRUE : FALSE;
	}
	function atualizarComentario($id,$texto)
	{
		$sql = "UPDATE  `u961758316_uefs`.`comentarios`
		SET 
		`Texto` = '$texto'
		WHERE  `comentarios`.`id` = $id;";
                    return (mysql_query($sql)) ? TRUE:FALSE;
	}
	function recuperarComentario($id)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`comentarios`";
		$sql_sel = mysql_query($sql);

                while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$id)
				return $ln;
	}

	function deletaComentario($id)
	{
          $sql = "DELETE FROM `u961758316_uefs`.`comentarios` WHERE id = '$id';";
            return (mysql_query($sql)) ? TRUE:FALSE;
	}



?>

