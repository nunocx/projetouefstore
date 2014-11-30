<<<<<<< HEAD
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
=======
<div class="usuarios view">
<h3><?php echo __('Perfil Usuario: ').h($usuario['Usuario']['name']); ?></h3>
	

 <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Celular:</th>
                                            <th>Telefone:</th>
                                            <th>Sexo:</th>
                                            <th>Reputação:</th>
 											<th>Foto:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="info">
                                            <td><?php echo h($usuario['Usuario']['name']); ?>&nbsp; </td>
                                            <td><?php echo h($usuario['Usuario']['Email']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Telefone1']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Telefone2']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Sexo']); ?>&nbsp;</td>
                                            <td><?php echo (h($usuario['Usuario']['VotosPositivos'])+h($usuario['Usuario']['VotosNegativos']))/2; ?></td>
                                        	<td> 
                                        		 <!--- comando para poder ver a IMG -->

		  <?php 
		  	echo $this->Upload->view('Usuario', $usuario['Usuario']['id']);
		  ?>

                                        	&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
  <?php echo 'Suas Fotos';
	echo $this->Upload->view('Usuario', $usuario['Usuario']['id']);

			 ?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
>>>>>>> origin/master
</div>