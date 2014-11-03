<?php
App::uses('Categor', 'Model');

/**
 * Categor Test Case
 *
 */
class CategorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categor',
		'app.produto',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categor = ClassRegistry::init('Categor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categor);

		parent::tearDown();
	}

}
