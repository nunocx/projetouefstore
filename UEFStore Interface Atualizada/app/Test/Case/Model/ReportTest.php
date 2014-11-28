<?php
App::uses('Report', 'Model');

/**
 * Report Test Case
 *
 */
class ReportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.report',
		'app.produto',
		'app.usuario',
		'app.categor',
		'app.servico',
		'app.comentario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Report = ClassRegistry::init('Report');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Report);

		parent::tearDown();
	}

}
