<?php
/**
 * ProdutoFixture
 *
 */
class ProdutoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Nome' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Descricao' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Preco' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'Data_Publicacao' => array('type' => 'date', 'null' => false, 'default' => null),
		'Data_Vencimento' => array('type' => 'date', 'null' => false, 'default' => null),
		'Quantidade' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'Foto_Video' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Bloqueado' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'Expirado' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'CondicaoUso' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'categor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_produtos_usuarios1_idx' => array('column' => 'usuario_id', 'unique' => 0),
			'fk_produtos_categors1_idx' => array('column' => 'categor_id', 'unique' => 0)
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
			'Descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Preco' => 1,
			'Data_Publicacao' => '2014-11-02',
			'Data_Vencimento' => '2014-11-02',
			'Quantidade' => 1,
			'Foto_Video' => 'Lorem ipsum dolor sit amet',
			'Bloqueado' => 1,
			'Expirado' => 1,
			'CondicaoUso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'usuario_id' => 1,
			'categor_id' => 1
		),
	);

}
