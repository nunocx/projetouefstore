<?php
    require_once('BancoDados.php');
    connectar();

    function inserirProduto ($titulo,$categoria,$preco,$fotoVideo,$descricao,$usuario_id,$quantidade,$category_id)
    {
        $condicaoUso = 'NULL';
        $data_Publicacao = date('Y-m-d');
         $data_Vencimento;
         $dia = date('d')+30;
         $mes = date('m');
         $ano = date('Y'); 
        // tem que fazer a para de somar 1 mes e tals
         $data_Vencimento = $ano.'-'.$mes.'-'.$dia;
        
        $sql = "INSERT INTO   `u961758316_uefs`.`produtos` (`id` ,`name` ,`Descricao` ,`Preco` ,`Data_Publicacao` ,
                `Data_Vencimento` ,`Quantidade` ,`Foto_Video` ,`Bloqueado` ,`Expirado` ,`CondicaoUso` ,`usuario_id` ,`category_id`)
                VALUES (NULL ,  '$titulo',  '$descricao',  '$preco',  '$data_Publicacao',  '$data_Vencimento', $quantidade,  '$fotoVideo',
                '0',  '0',  NULL,  '$usuario_id',  '$category_id');";
           
         
         return mysql_query($sql)? TRUE:FALSE;
    }
    function atualizarProduto($id,$titulo,$category_id,$preco,$quantidade,$fotoVideo,$descricao,$usuario_id)
    {
        $condicaoUso = NULL;
        $produto = recuperarProduto($id);

            if($produto['id']==$id)
            {
                $sql = "UPDATE   `u961758316_uefs`.`produtos`
                SET  
                `name` =  '$titulo',
                `Descricao` =  '$descricao',
                `Preco`= '$preco',
                `Quantidade`= '$quantidade',
                `Foto_Video`= '$fotoVideo',
                `CondicaoUso`= '$condicaoUso',
                `category_id`= '$category_id'
                WHERE  `produtos`.`id` = '$id' AND `produtos`.`usuario_id` = '$usuario_id';";
                
                mysql_query($sql);
                
                return TRUE;
            }
            else
                return FALSE;
    }
    function recuperarProduto($idProduto)
    {
        $sql = "SELECT * FROM `u961758316_uefs`.`produtos`";
        $sql_sel = mysql_query($sql);

        while($ln = mysql_fetch_array($sql_sel))
            if($ln['id'] == $idProduto)
                return $ln;
    }
    function buscarProdutos($nome)
    {
        $nome.='%';    
        $sql = "SELECT * FROM `u961758316_uefs`.`produtos` WHERE name LIKE '$nome';";
        $sql = mysql_query($sql);
         $contador = 0;
        while ( $produtosEncontrados = mysql_fetch_array($sql) )
        { 
         $list[$contador++] = $produtosEncontrados; 
        }
        return  $list;
    }
    function deletaProduto($id)
    {
        $sql = "DELETE FROM `u961758316_uefs`.`produtos` WHERE id = '$id'";
            return mysql_query($sql)? TRUE:FALSE;
    }
?>