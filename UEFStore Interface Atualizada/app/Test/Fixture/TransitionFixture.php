<?php
/**
 * TransitionFixture
 *
 */
class TransitionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'produto_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'servico_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'interessado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'data_final' => array('type' => 'date', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'usuario_id' => 1,
			'produto_id' => 1,
			'servico_id' => 1,
			'interessado_id' => 1,
			'data_final' => '2014-11-18',
			'status' => 1
		),
	);

}
