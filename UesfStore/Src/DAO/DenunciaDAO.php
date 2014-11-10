<?php
	
class DenunciaDAO
{
		


	private $bd;

	    function __construct($bd)
	    {
	        $this->bd = $bd;
	    }
	
	function inserir($texto, $data,$produto_id,$servico_id,$usuario_id)
	{
		
		if($usuario_id != NULL)
		{
			if($servico_id != 'NULL')
			{
				$sql = "INSERT INTO  $this->bd.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
			`usuario_id`)VALUES (NULL ,  '$texto',  '$data',  NULL,  '$servico_id',  '$usuario_id');";
			}
			else if($produto_id != 'NULL')
			{
				
				$sql = "INSERT INTO    $this->bd.`reports` (`id` ,`Texto` ,`Data` ,`produto_id` ,`servico_id` ,
			`usuario_id`)VALUES (NULL ,  '$texto',  '$data',  '$produto_id',  NULL,  '$usuario_id');";	
			}
			return $sql;
		}
		else
			return FALSE;
	}
	function atualizar($idDenuncia,$texto,$data,$usuario_id,$produto_id,$servico_id)
	{
	
		$denuncia=	$this->recuperarDenuncia($idDenuncia);
		if($denuncia['id'] == $idDenuncia)
		{
			if($produto_id != 'NULL')
			{
				$sql = "UPDATE $this->bd.`reports` SET `Texto` = '$texto', `Data` ='$data', `servico_id` =NULL
						 WHERE `reports`.`id` = '$idDenuncia' AND `reports`.`usuario_id` = '$usuario_id' AND `reports`.`produto_id` ='$produto_id'; ";
			}
			else if ($servico_id != 'NULL')
			{
				$sql = "UPDATE $this->bd.`reports` SET `Texto` = '$texto', `Data` ='$data' , `produto_id` =NULL
						 WHERE `reports`.`id` = '$idDenuncia' AND `reports`.`usuario_id` = '$usuario_id' AND `reports`.`servico_id` ='$servico_id';";
			}
			return $sql;
		}		
		else
			return FALSE;
	}
	function recuperarDenuncia($idDenuncia)
	{
		$sql = "SELECT * FROM $this->bd .`reports`";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$idDenuncia)
				return $ln;

		 return FALSE;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function deleta($idDenuncia)
	{
		$denuncia=	$this->recuperarDenuncia($idDenuncia);
		if($denuncia['id'] == $idDenuncia)
		{
			$sql = " DELETE FROM $this->bd.`reports` WHERE `reports`.`id` = '$idDenuncia';";
			return $sql;

		}
		else
			return FALSE;
	}


}
?>

