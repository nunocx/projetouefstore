<?php
App::uses('AppModel', 'Model');
/**
 * Mensagem Model
 *
 */
class Mensagem extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Assunto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

			'minLength' => array(
                            'rule' => array('minLength', 10),
                            'required' => true,
                            'message' => 'Nome muito curto'
            ),

            'maxLength' => array(
                            'rule' => array('maxLength', 30),
                            'required' => true,
                            'message' => 'Nome muito longo'
            ),
		),
		'Texto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

			'minLength' => array(
                            'rule' => array('minLength', 20),
                            'required' => true,
                            'message' => 'Mínimo de 20 caracteres'
            ),

            'maxLength' => array(
                            'rule' => array('maxLength', 150),
                            'required' => true,
                            'message' => 'Máximo de 150 caracteres'
            ),
		),
	);
}
