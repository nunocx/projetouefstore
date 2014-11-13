<?php
class Usuario extends User
{
 
    private  $reputacao;
    private  $bloqueado;


    public function __construct($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status)
    {
        parent::__construct($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status);
        $this->reputacao = 0;
        $this->bloqueado = 0;
    }
     public function __construct1($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status,$id)
    {
        parent::__construct1($nome,$email,$sexo,$telefone,$celular,$senha,$foto,$status,$id);
        $this->reputacao = 0;
        $this->bloqueado = 0;
    }
    public function __construct2($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status,
            $logado, $id, $reputacao, $bloqueado) 
    {
        parent::__construct2($nome, $email, $sexo, $telefone, $celular, $senha, $foto, $status, $logado, $id);
        $this->reputacao = $reputacao;
        $this->bloqueado = $bloqueado;
    }
    
    public function setReputacao($reputacao)
    {
        $this->reputacao = $reputacao; 
    }
    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado; 
    }       
    
    public function getReputacao()
    {
        return $this->reputacao; 
    }
    public function getBloqueado()
    {
        return $this->bloqueado; 
    }
    
    public function publicarAnuncio()
    {}
    public function denunciarAnuncio()
    {}
    public function excluirAnuncio()
    {}
    public function AvaliarUsuario()
    {}
}
?>