<div class="usuarios index">
	<h3><?php echo __('Perfil'); ?></h3>

	
					</div>
					
        	<div id="container_user">
	<!-- Nav -->
			 <header class="container">
             <nav class="menu_opcoes">
             <header>
                    <h1><strong><?php echo 'Nome: '.$usuario['Usuario']['name'] ?></strong></h1>
            </header>
             <div class="avatarimg"><?php echo $this->Html->image($usuario['Usuario']['Foto']); ?></div> </br >
                <ul >

                    <li class = "glyphicon glyphicon-shopping-cart"><a href="#">Meus Anuncios</a></li><br />
                    <li class = "glyphicon glyphicon-envelope"><?php echo $this->Html->link(__('Enviar Mensagem'), array('controller' => 'mensagems', 'action' => 'pm_send_to/'.$usuario['Usuario']['id'])); ?> </li><br />
                    
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