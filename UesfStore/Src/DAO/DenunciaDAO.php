<?php
	require_once('BancoDados.php');
connectar();
	
	function inserirDenuncia($Texto, $Data,$Produto_Id,$Servico_Id,$Usuario_id)
	{
             if($usuario_id != NULL)
		{
			if($servico_id != 'NULL')
			{
				$sql = "INSERT INTO   `u961758316_uefs`.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
			`usuario_id`)VALUES (NULL ,  '$texto',  '$data',  NULL,  '$servico_id',  '$usuario_id');";
			}
			else if($produto_id != 'NULL')
			{
				
				$sql = "INSERT INTO    `u961758316_uefs`.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
			`usuario_id`)VALUES (NULL ,  '$texto',  '$data',  '$produto_id',  NULL,  '$usuario_id');";	
			}
			return mysql_query($sql)?TRUE:FALSE;
		}
                return FALSE;
	}
	function atualizarDenuncia($idDenuncia,$texto,$data,$usuario_id,$produto_id,$servico_id)
	{
            if($produto_id != 'NULL')
            {
                $sql = "UPDATE `u961758316_uefs`.`reports` SET `Texto` = '$texto', `Data` ='$data', `servico_id` =NULL
						 WHERE `reports`.`id` = '$idDenuncia' AND `reports`.`usuario_id` = '$usuario_id' AND `reports`.`produto_id` ='$produto_id'; ";
            }
            else if ($servico_id != 'NULL')
            {
                $sql = "UPDATE `u961758316_uefs`.`reports`SET `Texto` = '$texto', `Data` ='$data' , `produto_id` =NULL
						 WHERE `reports`.`id` = '$idDenuncia' AND `reports`.`usuario_id` = '$usuario_id' AND `reports`.`servico_id` ='$servico_id';";
            }
		return mysql_query($sql)?TRUE:FALSE;
	}
	function recuperarDenuncia($idDenuncia)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`reports`";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['idDenuncia']==$idDenuncia)
				return $ln;
	}

	
	function deletaDenuncia($idDenuncia)
	{
            $sql = " DELETE FROM `u961758316_uefs`.`reports` WHERE `reports`.`id` = '$idDenuncia';";
            return mysql_query($sql)? TRUE:FALSE;
	}
?>

