<?php

class User
{
    private  $nome;
    private  $email;
    private  $sexo;
    private  $telefone;
    private  $celular;
    private  $senha;
    private  $foto;
    private  $status;//1-usuario 0-admin
    private  $logado;
    private  $id;
    
    public function __construct($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->senha= $senha;
        $this->foto = $foto;
        $this->status = $status;
        $this->id = null;
    }
    
    public function __construct1($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status,$logado,$id)
    {
        $this->nome = $nome; 
        $this->email = $email;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->senha= $senha;
        $this->foto = $foto;
        $this->status = $status;
        $this->logado = $logado;
        $this->id = $id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome; 
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;

    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setLogado($logado)
    {
        $this->status = $logado;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome; 
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getLogado()
    {
        return $this->logado;
    }
    public function getId()
    {
        return $this->id;
    }
}
?>