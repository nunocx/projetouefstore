<?php
	require_once('MySqlClass.php');
	conexao();

	function _inserir ($Nome,$Descricao,$Preco, $Quantidade,$Foto_Video, $CondicaoUso, $usuario_id, $category_id)
	{

		$data = date('d/m/y');
		$sql_inserir = "INSERT INTO  `u961758316_uefs`.`produtos` (`id` ,`name` ,`Descricao` ,`Preco` ,`Data_Publicacao` ,
`Data_Vencimento` ,`Quantidade` ,`Foto_Video` ,`Bloqueado` ,`Expirado` ,`CondicaoUso` ,`usuario_id` ,`category_id`)
VALUES (NULL ,  '$Nome',  '$Descricao',  '$Preco',  '$Data_Publicacao',  '$Data_Vencimento', $Quantidade,  '$Foto_Video',
	'$Bloqueado',  '$Expirado',  '$CondicaoUso',  '$usuario_id',  '$category_id');";
		
		if(mysql_query($sql_inserir))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
					
	function _update($IdDoProduto,$Nome,$Descricao,$Preco,$Quantidade,$Foto_Video,$CondicaoUso,$category_id)
	{
		$sql_update = "UPDATE  `u961758316_uefs`.`produtos`
		SET  
		`name` =  '$Nome',
		`Descricao` =  '$Descricao',
		`Preco`= '$Preco',
		`Quantidade`= '$Quantidade',
		`Foto_Video`= '$Foto_Video',
		`CondicaoUso`= '$CondicaoUso',
		`category_id`= '$category_id'
		WHERE  `produtos`.`id` = '$IdDoProduto';";

		if(mysql_query($sql_update))
		{
			return TRUE;
		}
		else
		{
			return FALSE;


	}

	function _findProduto($IdProduto)
	{
		$sql = "SELECT * FROM `u961758316_uefs`.`produtos`";
		$sql_sel = mysql_query($sql);

		while($ln = mysql_fetch_array($sql_sel))

			if($ln['id'] == $IdProduto)
				return $ln;
	}

	
	function _delete($IdProduto)
	{
		$sql = "DELETE FROM produtos WHERE id = '$IdProduto'";

			if(mysql_query($sql))
				return TRUE;
			else
				return FALSE;
	}



?>