<?php
/**
 * MensagemFixture
 *
 */
class MensagemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Assunto' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Texto' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Data' => array('type' => 'date', 'null' => false, 'default' => null),
		'administrador_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'usuariosR_Email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'usuariosE_Email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_mensagems_administradors1_idx' => array('column' => 'administrador_id', 'unique' => 0),
			'fk_mensagems_usuarios1_idx' => array('column' => 'usuariosR_Email', 'unique' => 0),
			'fk_mensagems_usuarios2_idx' => array('column' => 'usuariosE_Email', 'unique' => 0)
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
			'Assunto' => 'Lorem ipsum dolor sit amet',
			'Texto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Data' => '2014-11-02',
			'administrador_id' => 1,
			'usuariosR_Email' => 'Lorem ipsum dolor sit amet',
			'usuariosE_Email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
