<?php
class UsuarioDAO
{
    private $bd;

        function __construct($bd)
        {
            $this->bd = $bd;
        }
        function inserir($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
        {
            $usuario = $this->recuperarUsuario($email);
            if($usuario['Email'] != $email )
            { 
                $sql = "INSERT INTO $this->bd.`usuarios` 
                VALUES (NULL , '$email',  '$nome','$senha',  '$telefone', NULL,  '$sexo',  '$celular',  '$foto',  '0',  '0',  '0',  '0');";      
                return $sql;  
            }
            else
                return FALSE;
        }
        function atualizar($id,$nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
        {
            $usuario = $this->recuperarUsuario($email);
            if($usuario['id'] == $id && $usuario['Email'] == $email )
            {
                $sql = "	UPDATE  $this->bd.`usuarios`
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
               return  $sql;
         }
         else
            return FALSE;
        }
        function recuperarUsuario($email)//retrieve
        {
            $sql = "SELECT * FROM $this->bd.`usuarios`;";
            
            $sql = mysql_query($sql);

            while($ln = mysql_fetch_array($sql))
                if($ln['Email'] == $email)
                    return $ln;

            return FALSE;
        }
       function recuperarUsuarioID($id)//retrieve
        {
            $sql = "SELECT * FROM $this->bd.`usuarios`;";
            
            $sql = mysql_query($sql);

            while($ln = mysql_fetch_array($sql))
                if($ln['id'] == $id)
                    return $ln;

            return FALSE;
        }
        function buscarUsuarios($nome)//retrieve
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
        /*
                Mas nao iremos deletar USUARIOS...
                mas servirá para anuncios.
        */
        function deleta($email)
        {   

            $usuario = $this->recuperarUsuario($email);
            if($usuario['Email'] == $email )
            { 
                $sql = " DELETE FROM $this->bd.`usuarios` WHERE Email = '$email';";
                
                 return $sql;
            }
            else
                 return FALSE;
        }

}
?>

