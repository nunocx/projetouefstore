<?php
    require_once('BancoDados.php');
    connectar();

    function inserirProduto ($titulo,$preco,$fotoVideo,$descricao,$usuario_id,$quantidade,$category_id)
    {
         $data_Publicacao = date('Y-m-d');
         $dia = date('d');
         $mes = date('m');
         $ano = date('Y'); 
        // tem que fazer a para de somar 1 mes e tals
         $data_Vencimento = $ano.'-'.$mes.'-'.$dia;
        
        $sql = "INSERT INTO   `u961758316_uefs`.`produtos` 
            (`id` ,`name` ,`Descricao` ,`Preco` ,`Data_Publicacao` ,
                `Data_Vencimento` ,`Quantidade` ,`Foto_Video` ,`Bloqueado` ,`Expirado` ,`CondicaoUso` ,`usuario_id` ,`category_id`)
                VALUES (NULL , '$titulo',  '$descricao',  '$preco',  '$data_Publicacao',  '$data_Vencimento', '$quantidade',  '$fotoVideo',
                '0',  '0',  'NULL',  '$usuario_id','$category_id');";
           
         return mysql_query($sql)? TRUE:FALSE;
    }
    function atualizarProduto($id,$titulo,$category_id,$preco,$quantidade,$fotoVideo,$descricao,$usuario_id)
    {
        $condicaoUso = NULL;
       
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
                
       return mysql_query($sql) ? TRUE : FALSE;
    }
    function recuperarProduto($usuario_id)
    {
        $sql = "SELECT * FROM `u961758316_uefs`.`produtos`WHERE `produtos`.`usuario_id`='$usuario_id'";
        $sql1 = mysql_query($sql);
         $contador = 0;
        while ( $produtosEncontrados = mysql_fetch_array($sql1) )
        { 
            $list[$contador++] = $produtosEncontrados; 
        }
        return  $list;
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