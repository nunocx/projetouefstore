<?php

class ProdutoDAO
{
    private $bd;

        function __construct($bd)
        {
            $this->bd = $bd;
        }

        function inserir ($titulo,$category_id,$preco,$fotoVideo,$descricao,$usuario_id,$quantidade)    
        {
                $data_Publicacao = date('Y-m-d');
                $data_Vencimento;
                $dia = date('d')+30;
                $mes = date('m');
                $ano = date('Y'); 
                // tem que fazer a para de somar 1 mes e tals
                $data_Vencimento = $ano.'-'.$mes.'-'.$dia;
            echo '         '.$data_Vencimento;
            $sql = "INSERT INTO  $this->bd.`produtos` (`id` ,`name` ,`Descricao` ,`Preco` ,`Data_Publicacao` ,
                `Data_Vencimento` ,`Quantidade` ,`Foto_Video` ,`Bloqueado` ,`Expirado` ,`CondicaoUso` ,`usuario_id` ,`category_id`)
                VALUES (NULL ,  '$titulo',  '$descricao',  '$preco',  '$data_Publicacao',  '$data_Vencimento', $quantidade,  '$fotoVideo',
                '0',  '0',  NULL,  '$usuario_id',  '$category_id');";
            return $sql;
            
        }

        function atualizar($idProduto,$titulo,$category_id,$preco,$fotoVideo,$descricao,$idUsuario,$quantidade)

        {   $produto = $this->recuperarProduto($idProduto);

            if($produto['id']==$idProduto)
            {
                $sql = "UPDATE  $this->bd.`produtos`
                SET  
                `name` =  '$titulo',
                `Descricao` =  '$descricao',
                `Preco`= '$preco',
                `Quantidade`= '$quantidade',
                `Foto_Video`= '$fotoVideo',
                `CondicaoUso`= NULL,
                `category_id`= '$category_id'
                WHERE  `produtos`.`id` = '$idProduto' AND `produtos`.`usuario_id` = '$idUsuario';";

                return $sql;
            }
            else
                return FALSE;
        }

        function recuperarProduto($idProduto)
        {
            $sql = "SELECT * FROM  $this->bd.`produtos`";
            $sql = mysql_query($sql);

            while($ln = mysql_fetch_array($sql))

                if($ln['id'] == $idProduto)
                    return $ln;

             return FALSE;
        }
        function buscarProdutos($nome)
        {
                $nome.='%';
                
                $sql = "SELECT * FROM $this->bd.`produtos` WHERE name LIKE '$nome';";

                $sql = mysql_query($sql);
                
                $contador = 0;
                while ( $produtosEncontrados = mysql_fetch_array($sql) )
                { 
                    $list[$contador++] = $produtosEncontrados; 
                }
                return  $list;
        }

        function deleta($idProduto)
        {
            $produto = $this->recuperarProduto($idProduto);
            if($produto['id']==$idProduto)
            {

                $sql = "DELETE FROM $this->bd.`produtos` WHERE id = '$idProduto'";
                  return $sql;
            }
            else
                return FALSE;
        }
}
?>