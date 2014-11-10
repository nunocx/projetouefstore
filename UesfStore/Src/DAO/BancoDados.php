<?php

class BancoDados {
 
   /*
   * Declaração dos atributos da classe de conexão
   */
 
   private $host; // Endereço do servidor do banco de dados
   private $bd; // Banco de dados utilizado na conexão
   private $usuario; // Usuário do banco de dados que possua acesso ao schema
   private $senha; // Senha do usuário
   private $sql; // Consulta a ser executada

   function __construct($host,$bd,$usuario,$senha)
   {
          $this->host= $host;
          $this->bd = $bd; 
          $this->usuario = $usuario;
          $this->senha = $senha; 
   }
  /*
      * Método que conecta ao banco de dados passando
      * os valores necessários para que a conexão ocorra
      */
   function conectar(){
     
      $conexao = mysql_connect($this->host,$this->usuario,$this->senha) or die($this->mensagem(mysql_error()));
      return $conexao;
   }
 /*
      * Método que seleciona o banco de dados
      * com que irá trabalhar
      */
   function selecionarDB(){
      
       $banco = mysql_select_db($this->bd) or die($this->mensagem(mysql_error()));
      if($banco){
         return true;
      }else{
         return false;
      }
   }
 
   function executar(){
      /*
      * Método que executa uma query no banco de dados
      */
      $query = mysql_query($this->sql) or die ($this->mensagem(mysql_error()));
      return $query;
   }
  /*
      * Método criado para atribuir os valores as variáveis de conexão,
      * muito melhor que criar set's para cada variável
      */
   function set($propriedade,$valor){
     
      $this->$propriedade = $valor;
   }
  /*
      * Método que executa uma query passado por parametro no banco de dados 
      */
   function executarSQL($valor)
   {
         $this->set('sql',$valor);
        return $this->executar();
   }
  /*
      * Função para exibir os possíveis erros
      * Separamos em um método, pois este pode ser estilizado,
      * sem alterar outros métodos
      */
   function mensagem($erro){
     
      echo $erro;
   }
   /**
   * Função que retorna o nome do banco de dados.
   */

   function getDB()
   {
      return $this->bd;
   }
}
 
?>