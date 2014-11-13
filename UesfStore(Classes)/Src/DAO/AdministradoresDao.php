<?php
	require_once('BancoDados.php');
        connectar();



	
	function inserirAdmin($email,$nome,$senha,$telefone,$celular,$foto)
	{	
            $sql = "INSERT INTO  `u961758316_uefs`.`administradors` (`id` ,`Email` ,`name` ,`Senha` ,`Telefone1` ,`Telefone2` ,
                    `Data_Nascimento` ,`Foto` ,`Status`)
                    VALUES (NULL ,  '$email',  '$nome',  '$senha',  '$telefone',  '$celular',  NULL,  '$foto',  '1');";
            return (mysql_query($sql))?TRUE: FALSE;
		
	}
	function atualizarAdmin($id,$email,$nome,$senha,$telefone,$celular,$foto,$status)
	{
		$sql= "UPDATE `u961758316_uefs`.`administradors`
				SET 
				`Email` =  '$email',
				`name` =  '$nome',
				`Senha` =  '$senha',
				`Telefone1` =  '$telefone',
				`Telefone2` =  '$celular',
				`Data_Nascimento` =  NULL,
				`Foto` =  '$foto',
				`Status` =  '$status'
				 WHERE  `administradors`.`id` ='$id' AND `administradors`.`Email` = '$email';";
				
		return (mysql_query($sql)) ? TRUE : FALSE;
	}
	function recuperarAdmin($email)
	{
		$sql = "SELECT * FROM administradors";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['Email'] == $email)
				return $ln;
	}
        function buscarAdmins($nome)//retrieve
        {
            $nome.='%';
            
            $sql = "SELECT * FROM `administradors` WHERE name LIKE '$nome';";

            $sql = mysql_query($sql);
            
            $contador = 0;
            while ( $adminsEncontrados = mysql_fetch_array($sql) )
            { 
                $list[$contador++] = $adminsEncontrados; 
            }
            return  $list;
        }
	function deletarAdmin($id)
	{
            $sql = " DELETE FROM administradors WHERE id = '$id';";
            return (mysql_query($sql)) ? TRUE : FALSE;
	}



?>

