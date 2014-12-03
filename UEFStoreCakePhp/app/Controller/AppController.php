<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
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
