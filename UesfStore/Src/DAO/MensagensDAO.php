<?php
 class MensagensDAO
 {
     private $bd;
 
             function __construct($bd)
             {
                 $this->bd = $bd;
             }
             function inserir($assunto, $email_destinatario, $email_emissor, $texto, $administrador_id)
             {
                $data = date('Y-m-d'); 
                if($admininstrador_id == NULL)
                {
                   $sql = "INSERT INTO   $this->bd.`mensagems` (`id` ,`Assunto` ,`Texto` ,`Data` ,`administrador_id` ,
                     `Destinatario` ,`Emisor`)VALUES (NULL ,  '$Assunto',  '$Texto',  '$Data',  '$Administrador_Id',  '$Email_Destinatario',  '$Email_Emissor');";
                }
                else if($email_emissor == NULL)
                {
                   $sql = "INSERT INTO   $this->bd.`mensagems` (`id` ,`Assunto` ,`Texto` ,`Data` ,`administrador_id` ,
                     `Destinatario` ,`Emisor`)VALUES (NULL ,  '$Assunto',  '$Texto',  '$Data',  '$Administrador_Id',  '$Email_Destinatario',  '$Email_Emissor');";   
                }
                return $sql;               
             }
             function atualizar($id, $texto, $data, $assunto, $email_destinatario, $email_emissor, $admininstrador_id) 
             {
   
               
                $sms = $this->recuperarMensagem($id);                  
   
                if( $sms['id'] == $id)
                 {  
                    if($admininstrador_id == NULL)
                    {

                            $sql = "UPDATE  $this->bd.`mensagems` 
                                    SET
                                    `Assunto` = '$assunto',
                                    `Texto` = '$texto',
                                    `Data` = '$data',
                                    `Destinatario` = '$email_destinatario',
                                    `Emisor` = '$email_emissor'
                                   WHERE `id` = '$id';";
                        
                    }
                    else if($email_emissor == NULL)
                        {
                             $sql = "UPDATE  $this->bd.`mensagems` 
                                          SET
                                            `Assunto` = '$assunto',
                                            `Texto` = '$texto',
                                            `Data` = '$data',
                                            `administrador_id`= '$admininstrador_id'
                                            `Destinatario` = '$email_destinatario'
                                         WHERE `id` = '$id';";
                        }

                    return $sql;
                  }
                    else
                        return FALSE;
                
             }
             function recuperarMensagem($id)
             {
                 $sql = "SELECT * FROM  $this->bd.`mensagems`";
                 $sql = mysql_query($sql);
 
                 while($ln = mysql_fetch_array($sql))
                        if($ln['id']==$id)
                             return $ln;

                return FALSE;
             }

             function buscarMensagens($email,$tipo)
             {
                if($tipo=='D')
                    $sql = "SELECT * FROM  $this->bd.`mensagems` WHERE Destinatario LIKE '$email'; ";
                else if($tipo=='E')
                    $sql = "SELECT * FROM  $this->bd.`mensagems` WHERE Emissor LIKE '$email'; ";
                else if($tipo == 'A')
                    $sql = "SELECT * FROM  $this->bd.`mensagems` WHERE administrador_id LIKE '$email'; ";
                else
                    return FALSE;
                 
                 $sql = mysql_query($sql);
                 $contador = 0;
                 
                 while($smsEncontradas = mysql_fetch_array($sql))
                 {
                    $list[$contador++] = $smsEncontradas;
                 }

                    return $list;
             }
             /*
                     Mas nao iremos deletar USUARIOS...
                     mas servirá para anuncios.
             */
             function deleta($id)
             {
                 $sms = $this->recuperarMensagem($id);
                 if($sms['id']==$id)
                 {
                   $sql = "DELETE FROM $this->bd.`mensagems` WHERE `mensagems`.`id` = $id;";
                    return $sql;
                 }
                 else
                    return FALSE;
             }
 }

 ?>

