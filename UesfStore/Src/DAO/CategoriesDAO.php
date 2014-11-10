<?php
	
class CategoriesDAO
{	
	private $bd;

        function __construct($bd)
        {
            $this->bd = $bd;
        }

	
	function inserir($nome)
	{
		$cat = $this->recuperarCategoriasN($nome);
		if($cat['name']!=$nome)
		{
			$sql = "INSERT INTO  $this->bd.`categories` (`id` ,`name`)VALUES (NULL ,  '$nome');";
				return $sql;
		}else
		return FALSE;
	}
	function atualizar($id, $nome)
	{
		$cat = $this->recuperarCategorias($id);
		if($cat['id']==$id)
		{
			$sql = "UPDATE $this->bd.`categories` SET 
			`name` =  '$nome'
			WHERE  `categories`.`id` = '$id';";
				return $sql;
		}
		return FALSE;
	}
	function recuperarCategoriasN($nome)
	{
		$sql = "SELECT * FROM anuncioterceiros";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['name']==$nome)
				return $ln;

		 return FALSE;
	}

	function recuperarCategorias($id)
	{
		$sql = "SELECT * FROM anuncioterceiros";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))
			if($ln['id']==$id)
				return $ln;

		 return FALSE;
	}

	/*
		Mas nao iremos deletar USUARIOS...
		mas servirá para anuncios.
	*/
	function deleta($id)
	{
		$cat = $this->recuperarCategorias($id);
		if($cat['id']==$id)
		{
			$sql = "DELETE FROM $this->bd.`categories` WHERE `categories`.`id` = $id";
			return $sql;
		}
		else
				return FALSE;
	}
}
?>

