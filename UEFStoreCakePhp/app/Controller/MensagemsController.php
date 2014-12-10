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
 * @subpackage MensagemsController
 * @example Classe MensagemsController()
 * @link http://cakephp.org CakePHP(tm) Project 
 * @since CakePHP(tm) v 0.2.9
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');
/**
 * Mensagems Controller
 *
 * @property Mensagem $Mensagem
 * @property PaginatorComponent $Paginator
 */
class MensagemsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
 * Método index, mostra todas as mensagens paginadas.
 * @return void
 */
		public function index(){
			
			$mensagems = $this->paginate();
	        if ($this->request->is('requested')) {   //Se for requisição de outra view/element:
	            return $mensagems;
	        } else {  //Senão envia para a view padrão
	            $this->set('mensagems', $mensagems);
	        }
		}
		public function pm_inbox() {
	
		}
		public function pm_outbox() {
		
	
		}
		public function pm_send() {
			
			
		}

/**
* pm_send_to
* Esse método envia uma mensagem de um usuário para outro.
* O método busca o usuário destinatário no banco de dados através de um sql simples.
* Após o destinatário ser encontrado, a mensagem é ligada aos usuários emissor e destinatário, e caso seja referente a um produto, é ligada a este.
* @param id Id do emissor
* @param id1 Id do destinatário
* @throws NotFoundException Caso o destinatário não seja encontrado, ou se o produto ou serviço ao qual a mensagem (pode) se referir não exista.
*/
			public function pm_send_to($id = NULL,$id1 = NULL,$id2 = NULL) {
				
				$i = $id;
				$ip = $id1;
				$ip2 = $id2;

				if($ip>0){

					$sql = "SELECT * FROM `u961758316_uefs`.`usuarios` WHERE `usuarios`.`id` = $i"; 
			$usuario = $this->Mensagem->query($sql);

			if($usuario ==null)
			{
				throw new NotFoundException("Usuário não encontrado!");
			}

			foreach ($usuario as $usuarios) {
				$usuario = $usuarios;
			}
			//debug($usuario['usuarios']['name']) or die ();
			$this->set('idUser', $usuario['usuarios']['id']);
			
			$sql = "SELECT * FROM `u961758316_uefs`.`produtos` WHERE `produtos`.`id` = $ip"; 
			$produto = $this->Mensagem->query($sql);

			if($produto ==null)
			{
				throw new NotFoundException("Produto não encontrado!");
			}

			foreach ($produto as $produtos) {
				$produto = $produtos;
			}
			//debug($usuario['usuarios']['name']) or die ();
			$this->set('idProduct', $produtos['produtos']['id']);
			$this->set('idServico', "");

			}else if($ip2 > 0){
			$sql = "SELECT * FROM `u961758316_uefs`.`usuarios` WHERE `usuarios`.`id` = $i"; 
			$usuario = $this->Mensagem->query($sql);

			if($usuario ==null)
			{
				throw new NotFoundException("Usuário não encontrado!");
			}

			foreach ($usuario as $usuarios) {
				$usuario = $usuarios;
			}
			//debug($usuario['usuarios']['name']) or die ();
			$this->set('idUser', $usuario['usuarios']['id']);
			
			$sql = "SELECT * FROM `u961758316_uefs`.`servicos` WHERE `servicos`.`id` = $ip2"; 
			$servico = $this->Mensagem->query($sql);

			if($servico ==null)
			{
				throw new NotFoundException("Produto não encontrado!");
			}

			foreach ($servico as $servicos) {
				$servico = $servicos;
			}
			$this->set('idServico', $servicos['servicos']['id']);
			$this->set('idProduct', "");

			}
			else{

						$sql = "SELECT * FROM `u961758316_uefs`.`usuarios` WHERE `usuarios`.`id` = $i"; 
			$usuario = $this->Mensagem->query($sql);

			if($usuario ==null)
			{
				throw new NotFoundException("Usuário não encontrado!");
			}

			foreach ($usuario as $usuarios) {
				$usuario = $usuarios;
			}
			//debug($usuario['usuarios']['name']) or die ();
			$this->set('idUser', $usuario['usuarios']['id']);

			$this->set('idProduct', "");
			$this->set('idServico', "");

			}

	
		}

		public function message(){
			
		}
		public function pm_view_out() {
			
			
		}
		public function pm_view_in() {
			
			
		}

		/**
		* add
		* @deprecated
		* Método de adição padrão de mensagem.
		*/
		public function add() {
		if ($this->request->is('post')) {
			$this->Mensagem->create();
			
			if($this->Auth->user('name') != null)
				$this->request->data['Mensagem']['Emisor'] = $this->Auth->user('name');
			else
				$this->request->data['Mensagem']['Emisor'] = 'Anonimo';	

			$this->request->data['Mensagem']['Data'] = date('Y-m-d');
			if ($this->Mensagem->save($this->request->data)) {
				$this->Session->setFlash(__('Obrigado sua mensagem foi enviada com sucesso.'));
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('Occoreu um erro ao envio de sua mensagem.'));
			}
		}
	}


}
