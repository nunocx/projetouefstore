<?php
/**
 * @author Adriano Cavalcante <nuno.cavalcante@gmail.com>
 * @author Arthur Hagnês <arthurecomp@gmail.com>
 * @author Dermeval Neves <dermevalneves@gmail.com>
 * @author Fabio Santos <fabiosantos1388@gmail.com>
 * @author Higor Vital <h.vitall96@gmail.com>
 * @author JÃ©ssica Santos <jessica22san@gmail.com>
 * @author Joacy Mesquita <joacymsilva@gmail.com>
 * @author Kaique Cabral <kaaiquecabral@gmail.com>
 * @author Leno Oliveira <lenoosouza@gmail.com>
 * @author Marcelo Bião <marcelobiao2@gmail.com>
 * @author Nielson Vágno <nielsonvagno@gmail.com>
 * @author Sillas Senna <ssennarm@gmail.com>
 * @version 1.0
 * @copyright 2014, SoftComp Empreendimentos, 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @package Model
 * @subpackage Mensagem
 * @example Classe Mensagem()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppModel', 'Model');
/**
 * Mensagem Model
 * @access public
 */
class Mensagem extends AppModel {

/**
 * Regras de validação
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
