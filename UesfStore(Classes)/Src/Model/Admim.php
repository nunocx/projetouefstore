<?php
/**
* 
*/
class Admim extends User
{
    /**
    * 
    */
    public function __construct($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
    {
        parent::__construct($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status);
    }

    public function __construct1($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status, $logado,$id) 
    {
        parent::__construct1($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status, $logado,$id);
    }

    public function bloquearUsuario()
    {
            //Requisição BD Set User bloqueado

    }
    public function desbloquearUsuario()
    {
            //Requisição BD Set User desbloqueado

    }
    public function bloquearAnuncio()
    {
            //Requisição BD Set Anuncion bloqueado
    }
    public function desbloquearAnuncio()
    {
            //Requisição BD Set Anuncio desbloqueado
    }
    public function advertirUsuario()
    {
            //Requisição BD send e-mail User advertir
    }

}
?>