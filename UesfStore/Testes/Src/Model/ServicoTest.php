<?php

	/**
	* Teste Unitário: Serviço
	*/
	require_once dirname(__FILE__).'/../../../Src/Model/Servico.php';


	class ProdutoTest extends PHPUnit_Framework_TestCase {

	    protected $servico;

	    /**
	     * Método setUp executado antes de todos os testes.
	     */
	    protected function setUp() {
	        $this->servico = new Servico ("Lava Jato JC", "Serviços Gerais", "", "HHHHSSSS",
	            "Deixa seu veículo em perfeito estado", true);
	 	}

	 	/**
	     * Teste de unidade que verifica se os atributos de um Serviço são atribuidos e
	     * modificados corretamente.
	     */
	    public function testBasic()
	    {
	        $this->assertEquals("Lava Jato JC", $this->servico->getTitulo());
	        $this->assertEquals("Serviços Gerais", $this->servico->getCategoria());
	        $this->assertEquals("HHHHSSSS", $this->servico->getfotoVideo());
	        $this->assertEquals("Deixa seu veículo em perfeito estado", $this->servico->getDescricao());
	        $this->assertEquals(true, $this->servico->getACombinar());

	        $this->servico->setTitulo("InforMando");
	        $this->servico->setCategoria("Informática");
	        $this->servico->setfotoVideo("JJJJGGGG");
	        $this->servico->setDescricao("Manutenção e montagem de micro");
	        $this->servico->setACombinar(false);

	        $this->assertEquals("InforMando", $this->servico->getTitulo());
	        $this->assertEquals("Informática", $this->servico->getCategoria());
	        $this->assertEquals("JJJJGGGG", $this->servico->getfotoVideo());
	        $this->assertEquals("Manutenção e montagem de micro", $this->servico->getDescricao());
	    	$this->assertEquals(false, $this->servico->getACombinar());

	    }
	}
 ?>