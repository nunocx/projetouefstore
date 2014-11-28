<?php
App::uses('Transition', 'Model');

/**
 * Transition Test Case
 *
 */
class TransitionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transition',
		'app.usuario',
		'app.comentario',
		'app.servico',
		'app.category',
		'app.produto',
		'app.report',
		'app.interessado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transition = ClassRegistry::init('Transition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transition);

		parent::tearDown();
	}

}
