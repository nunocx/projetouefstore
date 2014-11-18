<?php
App::uses('Negociacao', 'Model');

/**
 * Negociacao Test Case
 *
 */
class NegociacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.negociacao',
		'app.usuario',
		'app.comentario',
		'app.servico',
		'app.category',
		'app.produto',
		'app.report',
		'app.terceiro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Negociacao = ClassRegistry::init('Negociacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Negociacao);

		parent::tearDown();
	}

}
