<?php
App::uses('Produto', 'Model');

/**
 * Produto Test Case
 *
 */
class ProdutoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produto',
		'app.usuario',
		'app.comentario',
		'app.servico',
		'app.negociacao',
		'app.report',
		'app.terceiro',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produto = ClassRegistry::init('Produto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produto);

		parent::tearDown();
	}

}
