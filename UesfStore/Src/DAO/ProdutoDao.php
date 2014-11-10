<?php
    require_once('MySqlClass.php');
    conexao();

    function inserir ($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$quantidade)
    {
        $condicaoUso = 'NULL';
        $data_Publicacao = mktime (0, 0, 0, date("y")  , date("m"), date("d"));
        $data_Vencimento = mktime (0, 0, 0, date("y")  , date("m"), date("d")+15);
        $sql_inserir = "INSERT INTO  `u961758316_uefs`.`produtos` VALUES (NULL ,'$titulo','$descricao','$preco','$data_Publicacao','$data_Vencimento','$quantidade','$fotoVideo','$bloqueado','$expirado','$condicaoUso','$idUsuario','$categoria');";
         return mysql_query($sql_inserir)? TRUE:FALSE;
    }
    function update($idDoProduto,$titulo,$category_id,$preco,$foto_Video,$descricao,$idUsuario,$quantidade)
    {
        $condicaoUso = 'NULL';
        $sql = "UPDATE  `u961758316_uefs`.`produtos`
        SET  
        `name` =  '$titulo',
        `Descricao` =  '$descricao',
        `Preco`= '$preco',
        `Quantidade`= '$quantidade',
        `Foto_Video`= '$foto_Video',
        `CondicaoUso`= '$condicaoUso',
        `category_id`= '$category_id'
        WHERE  `produtos`.`id` = '$idDoProduto' "
        . "AND `produtos`.`usuario_id` = '$idUsuario';";
        return mysql_query($sql)? TRUE:FALSE;
    }
    function recuperarProduto($idProduto)
    {
        $sql = "SELECT * FROM `u961758316_uefs`.`produtos`";
        $sql_sel = mysql_query($sql);

        while($ln = mysql_fetch_array($sql_sel))
            if($ln['id'] == $idProduto)
                return $ln;
    }
    function buscarProdutos($nomeProduto)
    {
        $sql = "SELECT * FROM `u961758316_uefs`.`produtos` WHERE name = '$nomeProduto'";
        $sql_sel = mysql_query($sql);
            return mysql_fetch_array($sql_sel);
    }
    function deleta($idProduto)
    {
        $sql = "DELETE FROM produtos WHERE id = '$idProduto'";
            return mysql_query($sql)? TRUE:FALSE;
    }
?>