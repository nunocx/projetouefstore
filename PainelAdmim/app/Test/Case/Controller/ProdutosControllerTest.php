<?php
App::uses('ProdutosController', 'Controller');

/**
 * ProdutosController Test Case
 *
 */
class ProdutosControllerTest extends ControllerTestCase {

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
		'app.category',
		'app.user'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
