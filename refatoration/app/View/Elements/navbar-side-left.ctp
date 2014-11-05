<?php	
$categories = $this->requestAction('categories/indexView');
?>
<div class="categories">
	<ul>
	<h3>Categorias</h3>
		<?php  foreach ($categories as $category): ?>
		<li><a href="#"><?php echo $category['Category']['name'];?></a></li>
		<?php  endforeach; ?>
	</ul>
</div>		
<div class="buters-guide">
	<h3>Guia do usuário</h3>
	<p><span>Nós queremos que você seja feliz com sua compra.</span></p>	
	<p>Por isso, estamos empenhados em dar -lhe todas as ferramentas necessárias para tomar a decisão certa com o mínimo de esforço.</p>
	<p> Esta versão é Beta e está sendo aprimorada, qualquer erro ou sugestões nos contacte.</p>
</div>	

				 