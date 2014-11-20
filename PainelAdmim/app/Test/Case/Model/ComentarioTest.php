<?php
App::uses('Comentario', 'Model');

/**
 * Comentario Test Case
 *
 */
class ComentarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comentario',
		'app.usuario',
		'app.negociacao',
		'app.produto',
		'app.report',
		'app.servico',
		'app.terceiro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comentario = ClassRegistry::init('Comentario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comentario);

		parent::tearDown();
	}

}
