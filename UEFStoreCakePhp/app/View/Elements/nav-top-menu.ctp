<?php
	$t = $this->Session->read('Auth.User.Status');
?>
<div class="navigation">

		
		
       
<?php echo $this->Html->image('logo.png', array('class'=>'logotop'));?>
<div class="clear"></div>
	<div class="Caixa_Menu">
				
					<div style="float: right;">

							
					<?php 
					if($t == 0)
					{echo $this->Html->link('Entrar','/usuarios/login', array('class' => 'linkTop btn btn-default'));
					echo $this->Html->link('Cadastre-se','/usuarios/add',	array('class' => 'linkTop btn btn-default'));
					echo $this->Html->link('Acessar Painel Admin','http://127.0.0.1/www/projetouefstore/PainelAdmim/',	array('class' => 'linkTop btn btn-default'));
					}
					else{
						echo '<h2 style="color:#FFF;"> Bem Vindo '.$this->Session->read('Auth.User.name').' !</h2>';
						echo $this->Html->link('Novo Serviço','/servicos/add/',	array('class' => 'linkTop btn btn-newobject'));
						echo $this->Html->link('Novo Produto','/produtos/add/',	array('class' => 'linkTop btn btn-newobject'));
						echo $this->Html->link('	Meu Perfil','/usuarios/view/'.$this->Session->read('Auth.User.id'),	array('class' => 'linkTop btn btn-warning'));
						echo $this->Html->link('Sair','/usuarios/logout',	array('class' => 'linkTop btn btn-primary'));
						
					}

					?>

					</div>
				<div class="clear"></div>

  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="<?php echo $this->Html->url('/', true)?>">Home </a>
						</li>
						
						<li>
						<!--	<a href="#">FAQ </a> -->
						</li>
						<li>
							<a href="<?php echo $this->Html->url('/mensagems/add',true);?>">Fale Conosco </a>
									<!--- SE PRECISAR DE SUBMENUS, ESSE É O CÓDIGO -
									<ul>
										<li><a href="#">Flowers & Plants</a></li>
										<li><a href="#">Home Fragrances</a></li>
										<li><a href="#">Spiritual Decor</a></li>
										<li><a href="#">Wall Decor</a></li>
									

								</li>
								<li>
									<a href="#">Fale Conosco</a>
								</li>
							</ul></ul> ---->
						</li>

						<li>
							<a href="<?php echo $this->Html->url('/termosDeUsos',true);?>">Termos e Condições </a>
						</li>
								
								<li>
									<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QTEN3EAAQDLJJ">Faça a sua Doação</a>
									
								</li>
								<div class="search_box" align="right">
							  	<!---Apaguei o nome "Buscar" pq já tinha dentro da caixa de busca-->
					     		<form name="busca" method="get" action="<?php echo $this->Html->url('/buscas/search_all', true)?>">
					     			<input type="text" name="termo" value="" placeholder="Buscar  anúncios">
									<input type="submit" value="">
					     		</form>
					    		<div class="clear"></div>
					    </div>
							</ul>					
					</div>

</div>

						
