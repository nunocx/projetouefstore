<?php

class UsuariosController extends AppController {

    public $name = 'Usuarios';
    
    public $uses = array('Usuario');
    public function beforeFilter()
    {
        parent::beforeFilter();
         $this->Auth->allowedActions = array('add');                        
    }

    public function index()
    {
        $this->set('ola',$this->Auth->user('name'));
    }


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

    public function logout()
    {
        $this->Session->setFlash(__('Deslogado com sucesso.'));
        $this->redirect($this->Auth->logout());
    }
    public function view($id = null) {
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuario', $this->Usuario->find('first', $options));
    }

    public function negocios($id = null) {
      
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuarios', $this->Usuario->find('first', $options));

    }
    /**
 * add method
 *
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
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
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
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        
    }
 
 }

?>