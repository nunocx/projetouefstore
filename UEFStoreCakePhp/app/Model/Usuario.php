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
 * @package Controller
 * @subpackage UsuariosController
 * @example Classe UsuariosController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel {
    
    public $name = 'Usuario';
    
/**
* beforeSave
* Esse método é executado antes de salvar as informações de usuário.
* Nele, é testado se o usuário enviou uma foto, caso sim, a foto é upada para o servidor, caso não, a foto é setada para null.
* Após isso, é adicionado ao AuthComponent as informações de usuário e senha.
*/

    public function beforeSave($options = array()) {
       
    	 if(!empty($this->data['Usuario']['Foto']['name'])) {  
        $this->data['Usuario']['Foto'] = $this->upload($this->data['Usuario']['Foto']);  

    } else {  
        unset($this->data['Usuario']['Foto']);  
    }
        if (!empty($this->data['Usuario']['Senha'])) {
        	$this->data['Usuario']['username'] = $this->data['Usuario']['Email'];
            $this->data['Usuario']['password'] = AuthComponent::password($this->data['Usuario']['Senha']);
        }
        return true;
    }

/**
* upload
* Método para fazer upload de uma imagem no banco de dados.
* @param imagem Array com informações da imagem
* @param dir Diretório da imagem.
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


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
		'Email' => array(
			'notEmpty' => array(
				'rule' => array('email'),
				'message' => 'Você deve colocar o Email corretamente.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Digite seu nome.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'Senha' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Coloque uma senha confiável ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
                            'rule' => array('minLength', 6),
                            'required' => true,
                            'message' => 'Sua senha precisa conter pelo menos 6 caracteres'
            ),
		),

		'Senha_Confirmacao' => array(
                    'notEmpty' => array(
                            'rule' => 'notEmpty',
                            'required' => true,
                            'message' => 'Confirme sua senha'
                    ),
                    'minLength' => array(
                            'rule' => array('minLength', 6),
                            'required' => true,
                            'message' => 'Sua senha precisa conter pelo menos 6 caracteres'
                    ),
                    'passwordConfirmation' => array(
                            'rule'    => array('passwordConfirmation'),
                    		'message' => 'As duas senhas não conferem'
                    ),
       	),

		'Telefone1' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Coloque seu telefone',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'Sexo' => array(
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

	public function passwordConfirmation($data){
         
        $password = $this->data['Usuario']['Senha'];
        $password_confirmation = $this->data['Usuario']['Senha_Confirmacao'];
              
        if($password===$password_confirmation){
             
            return true;
        }
        else{
             
            return false;   
        }
         
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
		'Negociacao' => array(
			'className' => 'Negociacao',
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
?>