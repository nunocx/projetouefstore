<?php
	require_once('BancoDados.php');
	connectar();
        
	function inserirServico($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
	{
           $data_Publicacao = date('Y-m-d');
	    $data_Vencimento;
	    $dia = date('d');
	    $mes = date('m');
	    $ano = date('Y'); 
	    // tem que fazer a para de somar 1 mes e tals
            $data_Vencimento = $ano.'-'.$mes.'-'.$dia;
             $sql= "INSERT INTO  `u961758316_uefs`.`servicos`
	      VALUES (NULL ,  '$titulo',  '$descricao',  '$preco','$data_Publicacao',  '$data_Vencimento',  '$fotoVideo',  '0',  '0',  '$aCombinar',  '$idUsuario',  '$categoria');";
	              
            return mysql_query($sql)? TRUE:FALSE;
	}		
	function atualizarServico($idServico,$titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
	{
		$sql = "UPDATE `u961758316_uefs`.`servicos`
			SET 
			`name` =  '$titulo',
			`Descricao` =  '$descricao',
			`Preco` =  '$preco',
			`Foto_Video` =  '$fotoVideo',
			`ACombinar` = '$aCombinar',
			`category_id` = '$categoria'
			WHERE 
			`servicos`.`id` = '$idServico' AND `servicos`.`usuario_id`='$idUsuario';";
	            
                return mysql_query($sql)? TRUE:FALSE;
	}
	function recuperarServico($idServico)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`servicos`";
		$sql_sel = mysql_query($sql);
		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id'] == $idServico)
				return $ln;
	}
	function buscarServicos($nome)
	    {
	            $nome.='%';
	            
	            $sql = "SELECT * FROM `u961758316_uefs`.`servicos` WHERE name LIKE '$nome';";

	            $sql1 = mysql_query($sql);
	            
	            $contador = 0;
	            while ( $servicosEncontrados = mysql_fetch_array($sql1) )
	            { 
	                $list[$contador++] = $servicosEncontrados; 
	            }
	            return  $list;
	    }
	function deletaServico($id)
	{
            $sql = "DELETE FROM `u961758316_uefs`.`servicos` WHERE id = '$id';";
            return mysql_query($sql)? TRUE:FALSE;
	}
?>

