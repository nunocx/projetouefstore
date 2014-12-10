<?php
/**
 * @author Adriano Cavalcante <nuno.cavalcante@gmail.com>
 * @author Arthur Hagn�s <arthurecomp@gmail.com>
 * @author Dermeval Neves <dermevalneves@gmail.com>
 * @author Fabio Santos <fabiosantos1388@gmail.com>
 * @author Higor Vital <h.vitall96@gmail.com>
 * @author Jéssica Santos <jessica22san@gmail.com>
 * @author Joacy Mesquita <joacymsilva@gmail.com>
 * @author Kaique Cabral <kaaiquecabral@gmail.com>
 * @author Leno Oliveira <lenoosouza@gmail.com>
 * @author Marcelo Bi�o <marcelobiao2@gmail.com>
 * @author Nielson V�gno <nielsonvagno@gmail.com>
 * @author Sillas Senna <ssennarm@gmail.com>
 * @version 1.0
 * @copyright 2014, SoftComp Empreendimentos, 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @package Controller
 * @subpackage AppController
 * @example Classe AppController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
/**
 * @access public
 * Classe AppController
 * � a classe de onde herdam todos os Controllers, os m�todos desta classe s�o p�blicos em todo o sistema.
 */
 
class AppController extends Controller {
   
    public $components = array(        
        'Auth',
        'Session',
    );
   
   public $helpers = array('Html', 'Form', 'Session');
      
/**
 * beforeFilter
 * Esse m�todo � respons�vel pelo filtro de autentica��o que permite ou n�o um controller a efetuar qualquer m�todo antes de execut�-lo.
 * O componente Auth � o respons�vel por fazer essa verifica��o, autenticando um usu�rio para autorizar o m�todo, ou n�o autorizando caso contr�rio.
 * Nesse m�todo s�o definidos par�metros para as a��es e redirecionamento de login e logout.
 */
   public function beforeFilter()
   {
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'userModel' => 'Usuario',
                'fields' => array(
                    'username' => 'username',
                    ),
                'scope' => array(
                    'Usuario.Status' => 1,
                    ),
                ),
            'Form',
            );        
        $this->Auth->authorize = 'controller';
       
        $this->Auth->loginAction = array(
            'plugin' => null,
            'controller' => 'usuarios',
            'action' => 'login',
        );
       
        $this->Auth->logoutRedirect = array(
            'plugin' => null,
            'controller' => 'usuarios',
            'action' => 'login',
        );
     
        $this->Auth->loginRedirect = array(
            'plugin' => null,
            'controller' => 'pages',
            'action' => 'home',
        );

        $this->Auth->authError = __('Voc� n�o possui autoriza��o para executar esta a��o.');
        
        $this->Auth->allowedActions = array('display');        
   }
   

/**
* @deprecated
* isAuthorized
* Este m�todo verifica se um usu�rio tem autoriza��o para algum m�todo.
* @param user Usu�rio a checar autoriza��o.
*/
   public function isAuthorized($user)
   {
     //somente o admin tem acesso a /admin/controller/action
     if (!empty($this->request->params['admin'])) {
 		return $user['role_id'] == 1;
 	}
 	return !empty($user); 	
   }
}
