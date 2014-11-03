<?php
/**
 * AdministradorFixture
 *
 */
class AdministradorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Email' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Nome' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Senha' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Telefone1' => array('type' => 'string', 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Telefone2' => array('type' => 'string', 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Data_Nascimento' => array('type' => 'date', 'null' => false, 'default' => null),
		'Foto' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Email_UNIQUE' => array('column' => 'Email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'Email' => 'Lorem ipsum dolor sit amet',
			'Nome' => 'Lorem ipsum dolor sit amet',
			'Senha' => 'Lorem ipsum dolor sit amet',
			'Telefone1' => 'Lorem ipsum dolor sit amet',
			'Telefone2' => 'Lorem ipsum dolor sit amet',
			'Data_Nascimento' => '2014-11-02',
			'Foto' => 'Lorem ipsum dolor sit amet',
			'Status' => 1
		),
	);

}
