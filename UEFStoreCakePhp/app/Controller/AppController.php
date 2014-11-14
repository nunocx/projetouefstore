<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => 'You can´t access that page',
            'authorize' => array('Controller')
        )
    );

/**
 * isAuthorized
 * @var user Usuário que irá logar
 * Método que verifica se o usuário está logado.
 */
 
    public function isAuthorized($user)
    {
        return TRUE;
    }
     
/**
 * beforeFilter
 * Método que define os comandos que poderão ser usados pelo usuário.
 * A função allow() define os métodos que poderão ser usados pelo usuário quando não estiver logado.
 * logged_in é setado quando o componente Auth autentica o usuário.
 * current_user recebe o usuário logado do componente Auth, podendo ser acessado nas subclasses.
 */

    public function beforeFilter()
    {
        $this->Auth->allow('login');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
}
