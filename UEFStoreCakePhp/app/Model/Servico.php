<?php
App::uses('AppModel', 'Model');
/**
 * Servico Model
 *
 * @property Usuario $Usuario
 * @property Category $Category
 * @property Comentario $Comentario
 * @property Negociacao $Negociacao
 * @property Report $Report
 */
class Servico extends AppModel {

/**
 * Validation rules
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
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'servico_id',
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
			'foreignKey' => 'servico_id',
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
			'foreignKey' => 'servico_id',
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







public function beforeSave($options = array())  
{  
    if(!empty($this->data['Servico']['Foto_Video']['name'])) {  
        $this->data['Servico']['Foto_Video'] = $this->upload($this->data['Servico']['Foto_Video']);  

    } else {  
        unset($this->data['Servico']['Foto_Video']);  
    }  
}  
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
