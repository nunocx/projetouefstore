<?php
	
class AnuncioTerceiroDAO 
{

	private $bd;

        function __construct($bd)
        {
            $this->bd = $bd;
        }
		function inserir($nome,$nomeDaEmpresa,$imagem,$valorPago,$admin_id,$link,$category_id)
		{
			$data_Publicacao = date('Y-m-d');

			//INSERT INTO `anuncioterceiros`(`id`, `name`, `NomeEmpresa`, `Imagem`, `ValorPago`, `DataInicio`, `link`, `administrador_id`)		

			$sql = "INSERT INTO   $this->bd.`anuncioterceiros` (`id`, `name`, `NomeEmpresa`, `Imagem`, `ValorPago`, `DataInicio`, `link`, `administrador_id`)	
			VALUES (NULL ,'$nome','$nomeDaEmpresa','$imagem','$valorPago','$data_Publicacao', '$link', '$admin_id');";

			return $sql;
		}
		function atualizar($id, $nome, $nomeEmpresa, $imagem, $valorPago, $link, $category_id, $admin_id)
		{
			$anuncioPhat = $this->recuperarAnuncio($id);
				
			if($anuncioPhat['id'] == $id)
			{	
				$sql = "UPDATE $this->bd.`anuncioterceiros`
				SET `name` = '$nome', `NomeEmpresa` = '$nomeEmpresa', `Imagem` = '$imagem', `ValorPago` = '$valorPago', `link` = '$link' 
				WHERE `anuncioterceiros`.`id` = $id AND  `anuncioterceiros`.`administrador_id` = '$admin_id';";
					return $sql;
			}
			else
				return FALSE;
			
		}
		function recuperarAnuncio($id)
		{
			$sql = "SELECT * FROM  $this->bd.`anuncioterceiros`";
			$sql = mysql_query($sql);

			while($ln = mysql_fetch_array($sql))
				if($ln['id']==$id)
					return $ln;

			return FALSE;
		}

	
		function deleta($id)
		{
			$anuncioPhat = $this->recuperarAnuncio($id);
			if($anuncioPhat['id'] == $id)
			{
				$sql = "DELETE FROM  $this->bd.`anuncioterceiros` WHERE id = '$id';";
				return $sql;
			}
			else
				return FALSE;
		}


}
?>

