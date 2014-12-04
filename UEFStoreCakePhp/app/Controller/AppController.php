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
 * @subpackage AppController
 * @example Classe AppController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
/**
 * @access public
 */
 
class AppController extends Controller {
   
    public $components = array(        
        'Auth',
        'Session',
    );
   
   public $helpers = array('Html', 'Form', 'Session');
      
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

        $this->Auth->authError = __('Você não possui autorização para executar esta ação.');
        
        $this->Auth->allowedActions = array('display');        
   }
   
   public function isAuthorized($user)
   {
     //somente o admin tem acesso a /admin/controller/action
     if (!empty($this->request->params['admin'])) {
 		return $user['role_id'] == 1;
 	}
 	return !empty($user); 	
   }
}
