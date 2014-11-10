<?php
	require_once('MySqlClass.php');
	conexao();
        
	function inserir($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)                        
	{
            $data_Publicacao = mktime (0, 0, 0, date("y")  , date("m"), date("d"));
            $data_Vencimento = mktime (0, 0, 0, date("y")  , date("m"), date("d")+15);
	    $sql_inserir = "INSERT INTO  `u961758316_uefs`.`servicos` VALUES (NULL ,  '$titulo',  '$descricao',  '$preco','$data_Publicacao',  '$data_Vencimento',  '$fotoVideo',  '0',  '0',  '$aCombinar',  '$idUsuario',  '$categoria');";
              return mysql_query($sql_inserir)? TRUE:FALSE;
	}		
	function update($idServico,$titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`servicos`
		SET 
		`name` =  '$titulo',
		`Descricao` =  '$descricao',
		`Preco` =  '$preco',
		`Foto_Video` =  '$fotoVideo',
		`ACombinar` = '$aCombinar'
		`category_id` = '$categoria'
		WHERE 
		`servicos`.`id` = '$idServico' AND `servicos`.`usuario_id`='$idUsuario';";
            
                return mysql_query($sql_update)? TRUE:FALSE;
	}
	function recuperarServico($idServico)
	{
		$sql = "SELECT * FROM servicos";
		$sql_sel = mysql_query($sql);
		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id'] == $idServico)
				return $ln;
	}
	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function deleta($idServico)
	{
            $sql = "DELETE FROM servicos WHERE id = '$idServico';";
            return mysql_query($sql)? TRUE:FALSE;
	}
?>

