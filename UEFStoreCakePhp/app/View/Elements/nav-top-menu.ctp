
<div class="navigation">
<div class="Caixa_Login">
		
		<?php echo $this->Html->link('Login','/login', array('class' => 'link'));?>
		or
        <?php echo $this->Html->link('Sign up','/usuarios/add',	array('class' => 'link'));?>
        
</div>
<?php echo $this->Html->image('logo.png');?>


<div class="clear"></div>
	<div id="Caixa_Menu">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="<?php echo $this->Html->url('/', true)?>">Home </a>
						</li>
						
						<li>
							<a href="#">FAQ </a>
						</li>
						<li>
							<a href="#">Fale Conosco </a>
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
									<a href="#">Faça a sua Doação</a>
									
								</li>
								<div class="search_box" align="right">
							  	<span>Buscar</span>
					     		<form>
					     			<input type="text" value=""><input type="submit" value="">
					     		</form>
					    		<div class="clear"></div>
					    </div>
							</ul>					
					</div>
  		    </div>

						