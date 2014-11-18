<?php
App::uses('Terceiro', 'Model');

/**
 * Terceiro Test Case
 *
 */
class TerceiroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.terceiro',
		'app.category',
		'app.produto',
		'app.usuario',
		'app.comentario',
		'app.servico',
		'app.report'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Terceiro = ClassRegistry::init('Terceiro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Terceiro);

		parent::tearDown();
	}

}
