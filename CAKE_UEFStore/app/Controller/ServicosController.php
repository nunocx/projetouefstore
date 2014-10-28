<?php
/**
 * Classe de Servico para a aplicação no site UEFStore.
 *
 * @copyright     Copyright (c) Softcomp Empreendimentos, Inc. (http://uefstore.url.ph)
 * @link          http://uefstore.url.ph Softcomp(tm) Project
 * @package       app.Controller
 * @since         Softcomp(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

class  ServicosController extends AppController 
{

	public $helpers = array ('Html','Form');
	public $Nome = 'Servico Controller';

	/*
		Esta função chama todos os dados di banco de dados, que será enviado para a view pela variavel 
		serviço.
	*/
	function index() 
    {
        $this->set('servico', $this->Servico->find('all'));
    }

    /*
		Este metodo manda os dados de um unico serviço contido no banco de dados. 
    */
     public function view($id = null) 
     {
        $this->Servico->IdServico = $id;
        $this->set('servico', $this->Servico->read());
    }
    /*
		Funcao de cadastro de serviço
    */
    public function add() 
    {
        if ($this->request->is('post')) 
        {
            if ($this->Servico->save($this->request->data)) 
            {
                $this->Session->setFlash('Serviço Cadastrado');
                $this->redirect(array('action' => 'index'));
            }
            else
            {

            	$this->Session->setFlash('Serviço não cadastrado');
                $this->redirect(array('action' => 'add'));
            }
        }
    }
    /*
		Função de alteração de dados serviço
    */
    function edit($id = null) 
    {
        $this->Servico->IdServico = $id;
        if ($this->request->is('get')) 
        {
            $this->request->data = $this->Servico->read();
        } else 
        	{
    	        if ($this->Servico->save($this->request->data)) 
    	        {
    	            $this->Session->setFlash('Dados do Serviço alterado');
    	            $this->redirect(array('action' => 'index'));
    	        }
                else
                {

                    $this->Session->setFlash('Dados do Serviço não alterado');
                    $this->redirect(array('action' => 'edit'));
                }

                }

    	    }
            /*
        Função de deletar serviço
    */
    function delete($id) 
    {
        if (!$this->request->is('servico')) 
        {
            throw new MethodNotAllowedException();
        }
        if ($this->Servico->delete($id)) 
        {
            $this->Session->setFlash('Servico com o ID:' . $IdServico . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
