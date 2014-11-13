<?php
/**
 * AnuncioterceiroFixture
 *
 */
class AnuncioterceiroFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Nome' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NomeEmpresa' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Imagem' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ValorPago' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'DataInicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'administrador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_anuncioTerceiros_administradors1_idx' => array('column' => 'administrador_id', 'unique' => 0)
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
			'Nome' => 'Lorem ipsum dolor sit amet',
			'NomeEmpresa' => 'Lorem ipsum dolor sit amet',
			'Imagem' => 'Lorem ipsum dolor sit amet',
			'ValorPago' => 1,
			'DataInicio' => '2014-11-02',
			'administrador_id' => 1
		),
	);

}
