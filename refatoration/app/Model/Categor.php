<?php
App::uses('AppModel', 'Model');
/**
 * Categor Model
 *
 * @property Produto $Produto
 * @property Servico $Servico
 */
class Categor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'categor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Servico' => array(
			'className' => 'Servico',
			'foreignKey' => 'categor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
