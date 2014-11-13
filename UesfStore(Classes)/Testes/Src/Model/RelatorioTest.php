<?php

	/**
	* Teste Unitário: Relatorio
	*/
	require_once dirname(__FILE__).'/../../../Src/Model/relatorio.php';


	class RelatorioTest extends PHPUnit_Framework_TestCase {

	    protected $relatorio;

	    /**
	     * Método setUp executado antes de todos os testes.
	     */
	    protected function setUp() {
	        $this->relatorio = new relatorio ("Relatorio da Semana", "Dados Coletados", "HHHH.png", "20/10/2014");
	 	}

	 	/**
	     * Teste de unidade que verifica se os atributos de um Relatorio são atribuidos e
	     * modificados corretamente.
	     */
	    public function testBasic()
	    {
	    	$this->assertEquals("Relatorio da Semana", $this->relatorio->getTitulo());
	        $this->assertEquals("Dados Coletados", $this->relatorio->getCorpo());
	        $this->assertEquals("HHHH.png", $this->relatorio->getImagem());
	        $this->assertEquals("20/10/2014", $this->relatorio->getData());

	        $this->relatorio->setTitulo("Relatorio da Semana 12");
	        $this->relatorio->setCorpo("Dados não Coletados");
	        $this->relatorio->setImagem("HHJHH.png");
	        $this->relatorio->setData("21/10/2014");

	    	$this->assertEquals("Relatorio da Semana 12", $this->relatorio->getTitulo());
	        $this->assertEquals("Dados não Coletados", $this->relatorio->getCorpo());
	        $this->assertEquals("HHJHH.png", $this->relatorio->getImagem());
	        $this->assertEquals("21/10/2014", $this->relatorio->getData());
	    }
	}
 ?>