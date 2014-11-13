<?php
/**
 * Classe de Usuario para a aplicação no site UEFStore.
 *
 * @copyright     Copyright (c) Softcomp Empreendimentos, Inc. (http://uefstore.url.ph)
 * @link          http://uefstore.url.ph Softcomp(tm) Project
 * @package       app.Controller
 * @since         Softcomp(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

class  ProdutosController extends AppController {

	public $helpers = array ('Html','Form');
	public $Nome = 'Produto Controller';

	/*
		Esta função chama todos os dados di banco de dados, que será enviado para a view pela variavel 
		usuarios.
	*/
	function index() 
    {
        $this->set('produto', $this->Produto->find('all'));
    }

    /*
		Este metodo manda os dados de um unico usuario contido no banco de dados. 
    */
    public function view($IdProduto = null) 
    {
        $this->Produto->IdProduto = $IdProduto;
        $this->set('produto', $this->Produto->read());
    }
    /*
		Funcao de cadastro de usuarios
    */
    public function add() 
    {
        if ($this->request->is('post')) 
        {
            if ($this->Produto->save($this->request->data)) 
            {
                $this->Session->setFlash('Produto Cadastrado');
                $this->redirect(array('action' => 'index'));
            }
            else
            {

            	$this->Session->setFlash('Produto não cadastrado');
                $this->redirect(array('action' => 'add'));
            }
        }
    }
    /*
		Função de alteração de dados cadastrais
    */
    function edit($Emails = null) 
    {
        $this->Usuario->Email = $Emails;
        if ($this->request->is('get')) 
        {
            $this->request->data = $this->Usuario->read();
        } else 
        	{
    	        if ($this->Usuario->save($this->request->data)) 
    	        {
    	            $this->Session->setFlash('Dados do Usuario alterado');
    	            $this->redirect(array('action' => 'index'));
    	        }
    	    }
    }

	/*
		Função de deletar usuario
	*/
    function delete($Email) 
    {
	    if (!$this->request->is('usuario')) 
	    {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Usuario->delete($Email)) 
	    {
	        $this->Session->setFlash('Usuario com o E-mail:' . $Email . ' foi deletado.');
	        $this->redirect(array('action' => 'index'));
	    }
	}

         
}
