<?php

	/**
	* Teste Unitário: RelatorioUsuario
	*/
	require_once dirname(__FILE__).'/../../../Src/Model/relatorioUsuario.php';


	class RelatorioUsuarioTest extends PHPUnit_Framework_TestCase {

	    protected $relatorioUsuario;

	    /**
	     * Método setUp executado antes de todos os testes.
	     */
	    protected function setUp() {
	        $this->relatorioUsuario = new relatorioUsuario ("Relatorio da Semana", "Dados Coletados", "HHHH.png", "20/10/2014", 12, 5, 8, 9);
	 	}

	 	/**
	     * Teste de unidade que verifica se os atributos de um Relatorio de Usuario são atribuidos e
	     * modificados corretamente.
	     */
	    public function testBasic()
	    {
	        $this->assertEquals(12, $this->relatorioUsuario->getQuantidadeUsuarios());
	        $this->assertEquals(5, $this->relatorioUsuario->getQuantidadeUsuarioAdvertidos());
	        $this->assertEquals(8, $this->relatorioUsuario->getQuantidadeUsuarioBloqueados());
	        $this->assertEquals(9, $this->relatorioUsuario->getQuantidadeUsuariosDenunciados());

	        $this->relatorioUsuario->setQuantidadeUsuarios(11);
	        $this->relatorioUsuario->setQuantidadeUsuarioAdvertidos(6);
	        $this->relatorioUsuario->setQuantidadeUsuarioBloqueados(4);
	        $this->relatorioUsuario->setQuantidadeUsuariosDenunciados(7);

	    	$this->assertEquals(11, $this->relatorioUsuario->getQuantidadeUsuarios());
	        $this->assertEquals(6, $this->relatorioUsuario->getQuantidadeUsuarioAdvertidos());
	        $this->assertEquals(4, $this->relatorioUsuario->getQuantidadeUsuarioBloqueados());
	        $this->assertEquals(7, $this->relatorioUsuario->getQuantidadeUsuariosDenunciados());
	    }
	}
 ?>