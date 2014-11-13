<?php
App::uses('AppModel', 'Model');
/**
 * Comentario Model
 *
 * @property Usuario $Usuario
 * @property Servico $Servico
 * @property Produto $Produto
 */
class Comentario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
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
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
