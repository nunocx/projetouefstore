<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Comentario $Comentario
 * @property Produto $Produto
 * @property Report $Report
 * @property Servico $Servico
 */
class Usuario extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Email' => array(
			'notEmpty' => array(
				'rule' => array('email', true),
				'message' => 'Campo deve ser preenchido obrigatoriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo deve ser preenchido obrigatoriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Senha' => array(
                'Not empty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Campo deve ser preenchido obrigatoriamente.'
                ),
                'Match passwords' => array(
                    'rule' => 'matchPasswords',
                    'message' => 'As senhas não conferem.'
                )
            ),
            'password_confirmation' => array(
                'Not empty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Por favor, confirme sua senha.'
                )
            )
		),
		'Telefone1' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo deve ser preenchido obrigatoriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Data_Nascimento' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Campo deve ser preenchido obrigatoriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Sexo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo deve ser preenchido obrigatoriamente.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * matchPasswords
 * @var senha a conferir
 * Método de checar a confirmação de senha.
 */

	public function matchPasswords($data)
    {
        if($data['password'] == $this->data['User']['password_confirmation'])
        {
            return TRUE;
        }
        $this->invalidate('password_confirmation', 'Suas senhas não combinam.');
        return FALSE;
    }

/**
 * beforeSave
 * @var options Apenas para eviar conflito de versão no CakePHP, não faz nada.
 * Método que aplica um hash na senha antes de salvá-la.
 */

    public function beforeSave($options = array())
    {
        if(isset($this->data['User']['password']))
        {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']); 
        } 
        return TRUE;
    }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'usuario_id',
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
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'usuario_id',
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
		'Report' => array(
			'className' => 'Report',
			'foreignKey' => 'usuario_id',
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
			'foreignKey' => 'usuario_id',
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
