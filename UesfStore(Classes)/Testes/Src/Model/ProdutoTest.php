<?php

	/**
	* Teste Unitário: Produto
	*/
	require_once dirname(__FILE__).'/../../../Src/Model/Produto.php';


	class ProdutoTest extends PHPUnit_Framework_TestCase {

	    protected $produto;

	    /**
	     * Método setUp executado antes de todos os testes.
	     */
	    protected function setUp() {
	        $this->produto = new Produto ("TV de Plasma", "Eletrônicos", "1.100,00", "HHHHSSSS",
	            "Televisor semi-novo, 2 meses de uso", 3);
	 	}

	 	/**
	     * Teste de unidade que verifica se os atributos de um Produto são atribuidos e
	     * modificados corretamente.
	     */
	    public function testBasic()
	    {
	        $this->assertEquals("TV de Plasma", $this->produto->getTitulo());
	        $this->assertEquals("Eletrônicos", $this->produto->getCategoria());
	        $this->assertEquals("1.100,00", $this->produto->getPreco());
	        $this->assertEquals("HHHHSSSS", $this->produto->getfotoVideo());
	        $this->assertEquals("Televisor semi-novo, 2 meses de uso", $this->produto->getDescricao());
	        $this->assertEquals(3, $this->produto->getQuantidade());

	        $this->produto->setTitulo("TV de LED FullHD");
	        $this->produto->setCategoria("Televisores");
	        $this->produto->setPreco("2.000,00");
	        $this->produto->setfotoVideo("SSSSHHHH");
	        $this->produto->setDescricao("Televisor Novo, Com Nota Fiscal");
	        $this->produto->setQuantidade(10);

	        $this->assertEquals("TV de LED FullHD", $this->produto->getTitulo());
	        $this->assertEquals("Televisores", $this->produto->getCategoria());
	        $this->assertEquals("2.000,00", $this->produto->getPreco());
	        $this->assertEquals("SSSSHHHH", $this->produto->getfotoVideo());
	        $this->assertEquals("Televisor Novo, Com Nota Fiscal", $this->produto->getDescricao());
	        $this->assertEquals(10, $this->produto->getQuantidade());

	    }
	}
 ?>