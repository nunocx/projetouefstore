<?php
require_once('MySqlClass.php');
conexao();

function inserir($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
{
    $sql_inserir = "INSERT INTO  `u961758316_uefs`.`usuarios` VALUES (NULL ,  '$email',  '$nome',  "
        . "'$senha',  '$telefone', NULL,  '$sexo',  '$celular',  '$foto',  '0',  '0',  '0',  '0');";
    return mysql_query($sql_inserir)? TRUE:FALSE;
}
function update($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
{
    $sql_update = "	UPDATE  `u961758316_uefs`.`usuarios`
    SET  
    `Email` =  '$email',
    `name` = '$nome',
    `Senha` = '$senha',
    `Telefone1` = '$telefone',
    `Telefone2` = '$celular',
    `Sexo` = '$sexo',
    `Foto` = '$foto',
    `Data_Nascimento` = NULL;
    WHERE `usuarios`.`Email` =  '$email';";
    return mysql_query($sql_update)? TRUE:FALSE;
}
function recuperarUsuario($email)//retrieve
{
    $sql = "SELECT * FROM `u961758316_uefs`.`usuarios`;";
    $sql_sel = mysql_query($sql);
    
    while($ln = mysql_fetch_array($sql_sel))
        if($ln['Email']==$email)
            return $ln;
}
function buscarUsuarios($nome)//retrieve
{
    $sql = "SELECT * FROM `u961758316_uefs`.`usuarios` WHERE name = '$nome';";
    return mysql_query($sql);
}
/*
    function _findUser($nome)
    {
        $sql = "SELECT * FROM `u961758316_uefs`.`usuarios`;";
        $sql_sel = mysql_query($sql);

        while($ln = mysql_fetch_array($sql_sel))
            if($ln['id']==$nome)
                return $ln;
    }
*/
/*
        Mas nao iremos deletar USUARIOS...
        mas servirá para anuncios.
*/
function deleta($email)
{    
    $sql = " DELETE FROM `u961758316_uefs`.`usuarios` WHERE Email = '$email';";
     return mysql_query($sql)? TRUE:FALSE;
}
?>

