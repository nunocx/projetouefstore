<?php
require_once('BancoDados.php');
conexao();

function _inserir($Assunto,$Texto, $Data, $Administrador_Id, $Email_Destinatario, $Email_Emissor)
{

    $sql_inserir = "INSERT INTO  `u961758316_uefs`.`mensagems` (`id` ,`Assunto` ,`Texto` ,`Data` ,`administrador_id` ,
        `Destinatario` ,`Emisor`)VALUES (NULL ,  '$Assunto',  '$Texto',  '$Data',  '$Administrador_Id',  '$Email_Destinatario',  '$Email_Emissor');";

    if(mysql_query($sql_inserir))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
function _update($IdMensagem, $Texto, $Data, $Assunto, $Email_Destinatario, $Email_Emissor, $Administrador_Email) 
{
    $sql_update = "UPDATE mensagems 
                                    SET
                                            `Assunto` = '$Assunto',
                                            `Texto` = '$Texto',
                                            `Data` = '$Data',
                                            `administrador_id`= '$Administrador_Email'
                                            `Destinatario` = '$Email_Destinatario',
                                            `Emisor` = '$Email_Emissor'

                                    WHERE `id` = '$IdMensagem';";

    if(mysql_query($sql_update))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
function _findMensagem($IdMensagem)
{
    $sql = "SELECT * FROM mensagems";
    $sql_sel = mysql_query($sql);

    while($ln = mysql_fetch_array($sql_sel))
            if($ln['IdMensagem']==$IdMensagem)
                    return $ln;
}

/*
        Mas nao iremos deletar USUARIOS...
        mas servirá para anuncios.
*/
function _delete($IdMensagem)
{
    $sql = "DELETE FROM `u961758316_uefs`.`mensagems` WHERE `mensagems`.`id` = $IdMensagem;";

            if(mysql_query($sql))
                    return TRUE;
            else
                    return FALSE;
}
?>

