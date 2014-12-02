<div class="usuarios index">
	<h3><?php echo __('Perfil').'&nbsp;&nbsp;'.$usuario['Usuario']['name']; ?></h3>

	
					</div>
					
        	<div id="container_user">
	<!-- Nav -->
			 <header class="container">
             <nav class="menu_opcoes">
             <?php echo $this->Html->image($usuario['Usuario']['Foto'],array('width'=>'150px','height'=>'150px'));?>
                <ul>
                     <li class = "glyphicon glyphicon-shopping-cart">&nbsp;<?php echo $this->Html->link('Meus Produtos', array('controller' => 'servicos', 'action' => 'my/'.$usuario['Usuario']['id'])); ?> </li><br />
                     <li class = "glyphicon glyphicon-bullhorn">&nbsp;<?php echo $this->Html->link('Meus Serviços', array('controller' => 'produtos', 'action' => 'my/'.$usuario['Usuario']['id'])); ?> </li><br />
                     <li class = "glyphicon glyphicon-envelope">&nbsp;<?php echo $this->Html->link('Enviar Mensagem', array('controller' => 'mensagems', 'action' => 'pm_send_to/'.$usuario['Usuario']['id'])); ?> </li><br />
                     <li class = "glyphicon glyphicon-usd">&nbsp;<?php echo $this->Html->link('Minhas Negociações', array('controller' => 'usuarios', 'action' => 'negocios/'.$usuario['Usuario']['id'])); ?> </li><br />
                      <li class = "glyphicon glyphicon-wrench">&nbsp;<?php echo $this->Html->link('Editar Dados', array('controller' => 'usuarios', 'action' => 'edit/'.$usuario['Usuario']['id'])); ?> </li><br />
                    
                </ul>
            </nav>
       		</header>

		<!-- Home -->
			<div class="wrapper style1 first">
			<div style="padding-left: 15px;">
			

			</div>
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
						</div>
						

				</article>
			</div>

		</div>