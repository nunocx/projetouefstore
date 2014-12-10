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

class UsuariosController extends AppController {

    public $name = 'Usuarios';
    
    public $uses = array('Usuario');

    /**
     * beforeFilter
     * Método herdado do AppController para filtrar a autorização do usuário aos métodos da classe.
     * @return void
     * @see AppController
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allowedActions = array('add');                        
    }

/**
 * index
 * Método index, retorna uma mensagem para o usuario autenticado atualmente.
 * @return void
 */

    public function index()
    {
        $this->set('ola',$this->Auth->user('name'));
    }

/**
* login
* Método de login, utiliza os parâmetros herdados do AppController para autenticar um usuário e redirecioná-lo.
* Caso a autenticação falhe, é exibida uma mensagem de erro.
* @see AppController
*/

    public function login()
    {
        $this->set('title_for_layout', __('Log in'));
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                 return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Senha ou E-mail incorretos tente novamente.'));
                $this->redirect($this->Auth->loginAction);
            }
        }
    }

/**
* logout
* Método de logout, utiliza os parâmetros herdados do AppController para desautenticar um usuário e redirecioná-lo.
* @see AppController
*/

    public function logout()
    {
        $this->Session->setFlash(__('Deslogado com sucesso.'));
        $this->redirect($this->Auth->logout());
    }

/**
* view
* Método view padrão para visualizar um usuário.
* @param int $id Id do usuário.
* @throws NotFoundException Caso o usuário não seja encontrado.
*/

    public function view($id = null) {
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuario', $this->Usuario->find('first', $options));
    }

    /**
    * negocios
    * Método que retorna as negociações do usuário.
    * @param int $id Id do usuário.
    */

    public function negocios($id = null) {
      
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuarios', $this->Usuario->find('first', $options));

    }

/**
 * add
 * Método padrão para adicionar um novo usuário.
 * @return void
 */

    public function add() {
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('Cadastrado com Sucesso'));
                
                 $id_= $this->Usuario->id;
                return $this->redirect('/');
            } else {
                $this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
            }
        }
    }

/**
 * edit
 * Método para edição padrão das informações do usuário.
 *
 * @throws NotFoundException Caso o usuário não seja encontrado.
 * @param int $id Id do usuário.
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('The usuario has been saved.'));
                        return $this->redirect('/');
            } else {
                $this->Session->setFlash(__('Os dados nao foram editados.'));
            }
        } else {
            $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
            $this->request->data = $this->Usuario->find('first', $options);
        }
    }
/**
 * delete
 * Método padrão para excluir o usuário.
 *
 * @param int $id Id do usuário.
 * @return void
 */
    public function delete($id = null) {
        
    }
 
 }

?>
