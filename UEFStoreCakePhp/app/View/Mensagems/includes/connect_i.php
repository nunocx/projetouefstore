<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name ="u961758316_uefs";

/* Configuração Online
$host='mysql.hostinger.com.br';
$user='u961758316_admin';
$pass='123456789';
$db  ='u961758316_uefs';
*/

$myConnection = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die ("Could Not connect to mysql");
?>
