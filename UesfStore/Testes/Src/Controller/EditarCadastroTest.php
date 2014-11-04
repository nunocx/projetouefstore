<?php

/**
* TC01-Atulaizar Dados Cadastrais:
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Controller.php';
require_once dirname(__FILE__).'/../../../Src/Model/Usuario.php';
require_once dirname(__FILE__).'/../../../Src/Controller/Exception/CampoPreenchidoErradoException.php';

class EditarCadastroTest extends PHPUnit_Framework_TestCase {

    protected $controller;
    protected $usuario;
    protected $email;

    protected function setUp() {
        $this->controller = new Controller();
        $this->controller->cadastrarUsuario("João Filho", "joao@hotmail.com","M", "07599992222","07599992222","abc1234","abc1234","fotoaqui","0");
        $this->email = "joao@hotmail.com";
    }

    /**
     * SC1 - Alteraçao dos dados bem-sucedida
     * Testa a atualização dos dados cadastrais do usario.
     */
    public function testAtualizarDadosCadastraisBemSucedido()
    {

        $this->usuario = $this->controller->recuperarUsuario($this->email);
        if($this->usuario instanceof Usuario)
        {    
            $nome = $this->usuario->getNome();
            $email = $this->usuario->getEmail();
            $sexo = $this->usuario->getSexo();
            $telefone = $this->usuario->getTelefone();
            $celular = $this->usuario->getCelular();
            $Senha = $this->usuario->getSenha();
            $foto = $this->usuario->getFoto();
            $status = $this->usuario->getStatus();
        }
        $this->controller->editarCadastro("Euclidistoviskon", "joao@hotmail.com","F", "07566668888","07544445555","abc1234","abc4321","outraFoo","0");

        $this->usuario = $this->controller->recuperarUsuario("joao@hotmail.com");
        if($this->usuario instanceof Usuario)
        {
            $this->assertNotEquals($nome,$this->usuario->getNome());
            $this->assertNotEquals($email,$this->usuario->getEmail());
            $this->assertNotEquals($sexo,$this->usuario->getSexo());
            $this->assertNotEquals($telefone,$this->usuario->getTelefone());
            $this->assertNotEquals($celular,$this->usuario->getCelular());
            $this->assertnotEquals($senha,$this->usuario->getSenha());
            $this->assertNotEquals($foto,$this->usuario->getFoto());
            $this->assertEquals($status,$this->usuario->getStatus());

            $this->assertEquals("Euclidistoviskon",$this->usuario->getNome());
            $this->assertEquals("joao@hotmail.com",$this->usuario->getEmail());
            $this->assertEquals("F",$this->usuario->getSexo());
            $this->assertEquals("07566668888",$this->usuario->getelefone());
            $this->assertEquals("07544445555",$this->usuario->getCelular());
            $this->assertEquals("abc4321",$this->usuario->getSenha());
            $this->assertEquals("outraFoo",$this->usuario->getFoto());
            $this->assertEquals("0",$this->usuario->getStatus());
        }
    }   
     
    /**
     * SC2 - Nome digitado inválido
     * Testa a atualização dos dados cadastrais com nome inválido.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNomeAtualizadoInvalido()
    {
        $this->controller->editarCadastro("", "joao@hotmail.com","F", "07566668888","07544445555","abc1234","abc4321","outraFoto","0");
    }

    /**
     * SC3 - Senha digitada diferente da cadastrada
     * Testa a atualização dos dados cadastrais com senha atual digitada diferente da cadastrada.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testDeSenhaAtualDigitadaDiferenteDoCadastrada()
    {
        $this->controller->editarCadastro("Euclidistoviskon", "joao@hotmail.com","F", "07566668888","07544445555","abc4781","4425454","outraFoo","0");
    }

    /**
     * SC3 - Nova Senha com quantidade de caracter insuficiente
     * Testa a atualização dos dados cadastrais com senha possuindo quantidade insuficientes de caracter.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testNovaSenhaComQuantidadeInsuficienteDeCaracter()
    {
        $this->controller->editarCadastro("", "joao@hotmail.com","F", "07566668888","07544445555","abc1234","a1","outraFoto","0");
    }

    /**
     * SC4 - Telefone digitado Inválido
     * Testa a atualização dos dados cadastrais com telefone digitado tendo um número de caracteres inferior a 8 e superior a 11.
     *@expectedException CampoPreenchidoErradoException
     */
    public function testTelefoneInvalido()
    {
        $this->controller->editarCadastro("", "joao@hotmail.com","F", "075666","07555","abc1234","abc4321","outraFoto","0");        
    }
}