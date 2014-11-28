<?php
App::uses('Anuncioterceiro', 'Model');

/**
 * Anuncioterceiro Test Case
 *
 */
class AnuncioterceiroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.anuncioterceiro',
		'app.administrador',
		'app.mensagem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Anuncioterceiro = ClassRegistry::init('Anuncioterceiro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Anuncioterceiro);

		parent::tearDown();
	}

}
