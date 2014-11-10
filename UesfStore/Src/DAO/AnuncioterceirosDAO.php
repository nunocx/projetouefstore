<?php
	require_once('BancoDados.php');
connectar();

	
	function inserirAnuncioTerc($nome,$nomeDaEmpresa,$imagem,$valorPago,$admin_id,$link,$category_id)
	{
	   $data_Publicacao = date('Y-m-d');
	    $sql = "INSERT INTO  `u961758316_uefs`.`anuncioterceiros` (`id`, `name`, `NomeEmpresa`, `Imagem`, `ValorPago`, `DataInicio`, `link`, `administrador_id`)	
	     VALUES (NULL ,'$nome','$nomeDaEmpresa','$imagem','$valorPago','$data_Publicacao', '$link', '$admin_id');";
             return (mysql_query($sql)) ? TRUE:FALSE;
	}
	function atualizarAnuncioTerc($id, $nome, $nomeEmpresa, $imagem, $valorPago, $link, $category_id, $admin_id)
	{
            $sql = "UPDATE `u961758316_uefs`.`anuncioterceiros`
				SET `name` = '$nome', `NomeEmpresa` = '$nomeEmpresa', `Imagem` = '$imagem', `ValorPago` = '$valorPago', `link` = '$link' 
				WHERE `anuncioterceiros`.`id` = $id AND  `anuncioterceiros`.`administrador_id` = '$admin_id';";
		return (mysql_query($sql))? TRUE:FALSE;
	}
	function recuperarAnuncioTerc($id)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`anuncioterceiros`";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$id)
				return $ln;
	}
        function buscaAnuncioTerc($nome)
	{
            $nome.='%';
            $sql = "SELECT * FROM `u961758316_uefs`.`anuncioterceiros` WHERE name LIKE '$nome'";
            $sql_sel = mysql_query($sql);
            $contador=0;
            while ( $anunTerc = mysql_fetch_array($sql) )
            { 
             $list[$contador++] = $anunTerc; 
            }
             return  $list;     
	}
	function deletaAnuncioTerc($id)
	{
            $sql = "DELETE FROM `u961758316_uefs`.`anuncioterceiros` WHERE id = '$id';";
            return (mysql_query($sql)) ? TRUE:FALSE;
	}

?>

