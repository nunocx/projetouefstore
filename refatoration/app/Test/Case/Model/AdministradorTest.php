<?php
App::uses('Administrador', 'Model');

/**
 * Administrador Test Case
 *
 */
class AdministradorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.administrador',
		'app.anuncioterceiro',
		'app.mensagem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Administrador = ClassRegistry::init('Administrador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Administrador);

		parent::tearDown();
	}

}
