<?php
//Função para oBD
class ConexaoBD{
    private $bancoDados;
    private $usuario;
    private $senha;
    private $hospedagem;
    /**
     * Construtor da Classe ConexaoBD, tem como objetivo instânciar e configurar os atributos da classe.
     */
    
    function __construct($bancoDados,$usuario,$senha,$hospedagem)
    {
        $this->bancoDados=$bancoDados;
        $this->usuario=$usuario;
        $this->senha=$senha;
        $this->hospedagem=$hospedagem;
    }
 
    function conectarBancoDeDados()
    {           
        /*
        $bd  ='u961758316_uefs';
        $host='mysql.hostinger.com.br';
        $user='u961758316_admin';
        $pass='123456789';
        */
        $conn = @mysql_connect($this->hospedagem,$this->usuario,$this->senha) or die ('Error Na rotina de conexao: '.mysql_error());
        mysql_select_db($this->bancoDados) or die ('Error ao selecionar banco de dados: '.mysql_error());
        $this->setTipagemBD('utf8');
   }
   private function setTipagemBD($padrao)
   {
       //resolvendo problemas de acentuações
        mysql_query("SET NAMES '$padrao'");
        mysql_query("SET character_set_connection=$padrao");
        mysql_query("SET character_set_client=$padrao");
        mysql_query("SET character_set_results=$padrao");
   }
   function alterarTodasConfig($bancoDados,$usuario,$senha,$hospedagem)
   {
      $this->setBancoDados($bancoDados);
      $this->setUsuario($usuario);
      $this->setSenha($senha);
      $this->setHospedagem($hospedagem);     
   }
    
    function setBancoDados($bancoDados) {
        $this->bancoDados = $bancoDados;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setHospedagem($hospedagem) {
        $this->hospedagem = $hospedagem;
    }

        function getBancoDados() {
        return $this->bancoDados;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getHospedagem() {
        return $this->hospedagem;
    }

    
}
?>