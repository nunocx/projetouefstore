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
    /*
            As Funções set's tem como objetivos modificar os atributos
            da classe.
    */
    public function setReputacao($reputacao)
    {
            $this->reputacao = reputacao; 
    }
    public function setBloqueado($bloqueado)
    {
            $this->bloqueado = bloqueado; 
    }
    /*
            As Funções get's tem como objetivos recuperar os dados
            dos atributos da classe.
    */
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