<?php
//Função para oBD

function connectar()
{   
    $bd  ='u961758316_uefs';
    $user='root';
    $pass='';
    $host='localhost';
    /*
    $bd  ='u961758316_uefs';
    $host='mysql.hostinger.com.br';
    $user='u961758316_admin';
    $pass='123456789';
    */
    $conn = @mysql_connect($host,$user,$pass) or die ('Error Na rotina de conexao: '.mysql_error());
    mysql_select_db($bd) or die ('Error ao selecionar banco de dados: '.mysql_error());
    //resolvendo problemas de acentuações
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET character_set_connection=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_results=utf8");
}	

?>