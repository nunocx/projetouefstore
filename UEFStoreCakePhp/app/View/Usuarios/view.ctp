<div class="usuarios index">
	<h3><?php echo __('Perfil'); ?></h3>

	<div class="8u">
							<header>
								<h1><strong><?php echo $usuario['Usuario']['name'] ?></strong></h1>
							</header>
						</div>
					</div>
					<div class="avatarimg"><?php echo $this->Html->image('avatar.jpg'); ?></div>
	<div id="container_user">
	<!-- Nav -->
			 <header class="container">
             <nav class="menu_opcoes">
                <ul >

                    <li class = "glyphicon glyphicon-shopping-cart"><a href="#">Produtos à Venda</a></li><br />
                    <li class = "glyphicon glyphicon-envelope"><?php echo $this->Html->link(__('Enviar Mensagem'), array('controller' => 'mensagems', 'action' => 'pm_send_to/'.$usuario['Usuario']['id'])); ?> </li><br />
                    
                </ul>
            </nav>
       		</header>

		<!-- Home -->
			<div class="wrapper style1 first">
			<div style="padding-left: 15px;">
			<?php echo $this->Html->image('images/price-rating.png');?><br />
			

			</div>
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<?php $this->Html->image('price-rating.png');?>
						</div>
						

				</article>
			</div>

		</div>
</div>