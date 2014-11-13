<?php

/**
* Teste Unitário: User
*/
require_once dirname(__FILE__).'/../../../Src/Model/User.php';


class UserTest extends PHPUnit_Framework_TestCase {

    protected $user;

    /**
     * Método setUp executado antes de todos os testes.
     */
    protected function setUp() {
        $this->user = new User("João Filho", "joao@hotmail.com",
        "M", "07599992222","07599993333","abc1234","fotoaqui","0");
 }

    /**
     * Teste de unidade que verifica se os atributos de um User são atribuidos e
     * modificados corretamente.
     */
    public function testBasic()
    {
        $this->assertEquals("João Filho", $this->user->getNome());
        $this->assertEquals("joao@hotmail.com", $this->user->getEmail());
        $this->assertEquals("M", $this->user->getSexo());
        $this->assertEquals("07599992222", $this->user->getTelefone());
        $this->assertEquals("07599993333", $this->user->getCelular());
        //$this->assertEquals("abc1234", $this->user->getSenha());
        $this->assertEquals("fotoaqui", $this->user->getFoto());
        $this->assertEquals("0", $this->user->getStatus());

        $this->user->setNome("José Neto");
        $this->user->setEmail("Jose@gmail.com");
        $this->user->setSexo("F");
        $this->user->setTelefone("07588885555");
        $this->user->setCelular("07588882222");
        //$this->user->setSenha("abc3333");
        $this->user->setFoto("foto");
        $this->user->setStatus("1");

        $this->assertEquals("José Neto", $this->user->getNome());
        $this->assertEquals("Jose@gmail.com", $this->user->getEmail());
        $this->assertEquals("F", $this->user->getSexo());
        $this->assertEquals("07588885555", $this->user->getTelefone());
        $this->assertEquals("07588882222", $this->user->getCelular());
        //$this->assertEquals("abc3333", $this->user->getSenha());
        $this->assertEquals("foto", $this->user->getFoto());
        $this->assertEquals("1", $this->user->getStatus());
    }

}