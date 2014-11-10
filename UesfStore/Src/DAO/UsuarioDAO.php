<?php
require_once('BancoDados.php');
connectar();

function inserirUsuario($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
{
    $sql = "INSERT INTO  `u961758316_uefs`.`usuarios` 
            VALUES (NULL , '$email',  '$nome','$senha',  '$telefone', NULL,  '$sexo',  '$celular',  '$foto',  '0',  '0',  '0',  '0');";      
    return mysql_query($sql)? TRUE:FALSE;    
}
function atualizarUsuario($id,$nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
{
    $sql = "	UPDATE  `u961758316_uefs`.`usuarios` 
                             SET  
                                `Email` =  '$email',
                                `name` = '$nome',
                                `Senha` = '$senha',
                                `Telefone1` = '$telefone',
                                `Telefone2` = '$celular',
                                `Sexo` = '$sexo',
                                `Foto` = '$foto',
                                `Data_Nascimento` = NULL
                             WHERE Email = '$email' AND id = '$id';
                        ";

    return mysql_query($sql)? TRUE:FALSE;
}
function recuperarUsuario($email)//recover
{
    $sql = "SELECT * FROM `u961758316_uefs`.`usuarios`;";
    $sql_sel = mysql_query($sql);
    
    while($ln = mysql_fetch_array($sql_sel))
        if($ln['Email']==$email)
            return $ln;
}
function buscarUsuarios($nome)
{
    $nome.='%';
            
        $sql = "SELECT * FROM $this->bd.`usuarios` WHERE name LIKE '$nome';";

        $sql = mysql_query($sql);
        
        $contador = 0;
        while ( $usuariosEncontrados = mysql_fetch_array($sql) )
        { 
            $list[$contador++] = $usuariosEncontrados; 
        }
        return  $list;
}

function deletaUsuario($email)
{
    $sql = " DELETE FROM `u961758316_uefs`.`usuarios` WHERE Email = '$email';";

     return mysql_query($sql)? TRUE:FALSE;
}
?>

