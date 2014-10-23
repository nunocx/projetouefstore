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
    private  $status;

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
    }
    /*
            As Funções set's tem como objetivos modificar os atributos
            da classe.
    */
    public function setNome($nome)
    {
            $this->nome = nome; 
    }
    public function setEmail($email)
    {
            $this->email = email;
    }
    public function setSexo($sexo)
    {
            $this->sexo = sexo;
    }
    public function setTelefone($telefone)
    {
            $this->telefone = telefone;
    }
    public function setCelular($celular)
    {
            $this->celular = celular;

    }
    public function setFoto($foto)
    {
            $this->foto = foto;
    }
    public function setStatus($status)
    {
            $this->status = status;
    }

    /*
            As Funções get's tem como objetivos recuperar os dados dos
            atributos da classe.
    */	

    public function getNome()
    {
            return $this->nome ; 
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
    public function getFoto()
    {
            return $this->foto;
    }
    public function getStatus()
    {
            return $this->status;
    }
}
?>