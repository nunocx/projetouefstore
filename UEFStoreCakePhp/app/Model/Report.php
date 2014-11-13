<?php
App::uses('AppModel', 'Model');
/**
 * Report Model
 *
 * @property Produto $Produto
 * @property Servico $Servico
 * @property Usuario $Usuario
 */
class Report extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Texto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo deve ser preenchido obrigatóriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Data' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Campo deve ser preenchido obrigatóriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'usuario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo deve ser preenchido obrigatóriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Servico' => array(
			'className' => 'Servico',
			'foreignKey' => 'servico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
