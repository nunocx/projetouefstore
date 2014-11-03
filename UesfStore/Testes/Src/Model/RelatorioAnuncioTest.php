<?php

	/**
	* Teste Unitário: RelatorioAnuncio
	*/
	require_once dirname(__FILE__).'/../../../Src/Model/relatorioAnuncio.php';


	class RelatorioAnuncioTest extends PHPUnit_Framework_TestCase {

	    protected $relatorioAnuncio;

	    /**
	     * Método setUp executado antes de todos os testes.
	     */
	    protected function setUp() {
	        $this->relatorioAnuncio = new relatorioAnuncio ("Relatorio da Semana", "Dados Coletados",
	         "HHHH.png", "20/10/2014", 5, 4, 5, 5);
	 	}

	 	/**
	     * Teste de unidade que verifica se os atributos de um Relatorio de Usuario são atribuidos e
	     * modificados corretamente.
	     */
	    public function testBasic()
	    {
	        $this->assertEquals(5, $this->relatorioAnuncio->getQuantidadeTotal());
	        $this->assertEquals(4, $this->relatorioAnuncio->getQuantidadeExpirados());
	        $this->assertEquals(5, $this->relatorioAnuncio->getQuantidadeDenunciados());
	        $this->assertEquals(5, $this->relatorioAnuncio->getQuantidadeBloqueados());

	        $this->relatorioAnuncio->setQuantidadeTotal(12);
	        $this->relatorioAnuncio->setQuantidadeExpirados(15);
	        $this->relatorioAnuncio->setQuantidadeDenunciados(2);
	        $this->relatorioAnuncio->setQuantidadeBloqueados(2);

	        $this->assertEquals(12, $this->relatorioAnuncio->getQuantidadeTotal());
	        $this->assertEquals(15, $this->relatorioAnuncio->getQuantidadeExpirados());
	        $this->assertEquals(2, $this->relatorioAnuncio->getQuantidadeDenunciados());
	        $this->assertEquals(2, $this->relatorioAnuncio->getQuantidadeBloqueados());
	    }
	}
 ?>