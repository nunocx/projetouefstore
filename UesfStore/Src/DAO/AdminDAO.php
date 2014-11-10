<?php
	

class AdminDAO
{
	private $bd;

        function __construct($bd)
        {
            $this->bd = $bd;
        }
	
		function inserir($email,$nome,$senha,$telefone,$celular,$foto)
		{	

		   $admin = $this->recuperarAdmin($email);	
		   if($admin['Email'] != $email)
			{
				$sql = "INSERT INTO  $this->bd.`administradors` (`id` ,`Email` ,`name` ,`Senha` ,`Telefone1` ,`Telefone2` ,
				`Data_Nascimento` ,`Foto` ,`Status`)
				VALUES (NULL ,  '$email',  '$nome',  '$senha',  '$telefone',  '$celular',  NULL,  '$foto',  '1');";
				
				return $sql;
			}
			else
				return FALSE;
		}
		function atualizar($id,$email,$nome,$senha,$telefone,$celular,$foto,$status)
		{
		   $admin = $this->recuperarAdmin($email);	
		   if($admin['Email'] == $email)
			{
				$sql= "UPDATE $this->bd.`administradors`
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
				
				return $sql;
			}
			else
				return FALSE;
		}


		function recuperarAdmin($email)
		{
			$sql = "SELECT * FROM $this->bd.`administradors`";
			$sql = mysql_query($sql);

			while($ln = mysql_fetch_array($sql))
				if($ln['Email'] == $email)
					return $ln;

			 return FALSE;
		}


		function buscarAdmins($nome)//retrieve
        {
            $nome.='%';
            
            $sql = "SELECT * FROM $this->bd.`administradors` WHERE name LIKE '$nome';";

            $sql = mysql_query($sql);
            
            $contador = 0;
            while ( $adminsEncontrados = mysql_fetch_array($sql) )
            { 
                $list[$contador++] = $adminsEncontrados; 
            }
            return  $list;
        }

		function deleta($email)
		{
		   $admin = $this->recuperarAdmin($email);	
		   
		   if($admin['Email'] == $email)
			{
				$sql = " DELETE FROM $this->bd.`administradors` WHERE Email = '$email';";
				return $sql;
			}
			else
				return FALSE;
		}


}
?>

