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
 * @subpackage Negociacao
 * @example Classe Negociacao()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Usuario $Usuario
 * @property Category $Category
 * @property Comentario $Comentario
 * @property Negociacao $Negociacao
 * @property Report $Report
 */
class Produto extends AppModel {

/**
 * Regras de validação
 * As associações abaixo foram criadas com todas as chaves possíveis, as quais não forem necessárias poderam ser removidas 
 *
 * @var array
 */
	public $validate = array(
		
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),

			'minLength' => array(
                            'rule' => array('minLength', 3),
                            'required' => true,
                            'message' => 'Nome muito curto'
            ),

            'maxLength' => array(
                            'rule' => array('maxLength', 30),
                            'required' => true,
                            'message' => 'Nome muito longo'
            ),
		),

		'Descricao' => array(
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

		'Preco' => array(
			'numeric' => array(
				'rule' => array('decimal',2),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'Quantidade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'usuario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	

/**
 * Associações belongsTo 
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
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 *  Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'produto_id',
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
		'Negociacao' => array(
			'className' => 'Negociacao',
			'foreignKey' => 'produto_id',
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
			'foreignKey' => 'produto_id',
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





/**
 * Método beforeSave
 * 
 */ 
public function beforeSave($options = array())  
{  
    if(!empty($this->data['Produto']['Foto_Video']['name'])) {  
        $this->data['Produto']['Foto_Video'] = $this->upload($this->data['Produto']['Foto_Video']);  

    } else {  
        unset($this->data['Produto']['Foto_Video']);  
    }  
} 
/**
 * Método upload 
 * Esta função permite ao usuário fazer o upload da imagem para um produto a ser cadastrado
 */ 

public function upload($imagem = array(), $dir = 'img')  
{  

    $dir = WWW_ROOT.$dir.DS;  
  
    if(($imagem['error']!=0) and ($imagem['size']==0)) {  
        throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$imagem['error'].' e tamanho '.$imagem['size']);  
    }  
  
    $this->checa_dir($dir);  
  
    $imagem = $this->checa_nome($imagem, $dir);  
  
    $this->move_arquivos($imagem, $dir);  
  
    return $imagem['name'];  
} 

/** 
 * Método checa_dir
 * Verifica se o diretório existe, se não ele cria. 
 * @access public 
 * @param Array $imagem 
 * @param String $data 
*/   
public function checa_dir($dir)  
{  
    App::uses('Folder', 'Utility');  
    $folder = new Folder();  
    if (!is_dir($dir)){  
        $folder->create($dir);  
    }  
}  
  
/** 
 * Método checa_nome
 * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente 
 * @access public 
 * @param Array $imagem 
 * @param String $data 
 * @return nome da imagem 
*/   
public function checa_nome($imagem, $dir)  
{  
    $imagem_info = pathinfo($dir.$imagem['name']);  
    $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];  
    debug($imagem_nome);  
    $conta = 2;  
    while (file_exists($dir.$imagem_nome)) {  
        $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;  
        $imagem_nome .= '.'.$imagem_info['extension'];  
        $conta++;  
        debug($imagem_nome);  
    }  
    $imagem['name'] = $imagem_nome;  
    return $imagem;  
}  
  
/** 
 * Método trata_nome
 * Trata o nome removendo espaços, acentos e caracteres em maiúsculo. 
 * @access public 
 * @param Array $imagem 
 * @param String $data 
*/   
public function trata_nome($imagem_nome)  
{  
    $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));  
    return $imagem_nome;  
}  
  
/** 
 * Método move_arquivos
 * Move o arquivo para a pasta de destino. 
 * @access public 
 * @param Array $imagem 
 * @param String $data 
*/   
public function move_arquivos($imagem, $dir)  
{  
    App::uses('File', 'Utility');  
    $arquivo = new File($imagem['tmp_name']);  
    $arquivo->copy($dir.$imagem['name']);  
    $arquivo->close();  
}  










}
