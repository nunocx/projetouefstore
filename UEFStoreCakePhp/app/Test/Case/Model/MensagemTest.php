<?php
App::uses('Mensagem', 'Model');

/**
 * Mensagem Test Case
 *
 */
class MensagemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mensagem',
		'app.administrador',
		'app.anuncioterceiro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mensagem = ClassRegistry::init('Mensagem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mensagem);

		parent::tearDown();
	}

}
