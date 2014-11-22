<div class="produtos view">
<h3><?php echo strtoupper($produto['Produto']['name'])?></h3>
	<dl>

	<?php echo __('Publicado em:'); ?></dt>
		<dd>
			<?php echo ($produto['Produto']['Data_Publicacao']); ?>
			
		</dd>
		<div id="content">
		  <div class="col1">
		    <img class="product" src="img/<?php echo $produto['Produto']['id']; ?>.jpg"/>
		    <img class="product" src="img/<?php echo $produto['Produto']['id']; ?>.jpg"/></div></img>

		  </div>
		  <div class="col2">
		    <p>por R$<?php echo $produto['Produto']['Preco']?>,00</p>

		  <div id="col2">
		    <div id="price2">por R$<?php echo $produto['Produto']['Preco']?>,00</div>
		  </div>
		</div>
					 	<a class="btn btn-default" href="#">Comprar</a>
					 	<br/><br/>
					 	
					 	<br/><a class="botaobolado" href="#">Comprar</a><br/><br/>
		<dt><?php echo __('Vendedor:'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
			&nbsp;
		</dd>
					    
		<div class="description"><dt><?php echo __('<br/><br/>Sobre o produto:'); ?></dt>
		<dd>
			<br/>
			<?php echo h($produto['Produto']['Descricao']); ?>
			&nbsp;
		</dd>
		<div class="description">
		
		
		
		<br/><br/>
		<?php echo __('Publicado em:'); ?></dt>
		<dd>
			<?php echo ($produto['Produto']['Data_Publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Vencimento:'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Data_Vencimento']); ?>
			&nbsp;
		</dd>
		
		
		
@@ -44,14 +36,24 @@
		
	</dl>
</div>

<div class="actions">
<div class="related">
	
	<ul>
		<br/><br/><br/><br/><br/><br/><br/><br/>
		
		<table class="table table-bordered table-hover table-striped">
	<tr></br>
		<th><?php echo __('Descrição'); ?></th>
		
	</tr>
	<tr><td><?php echo h($produto['Produto']['Descricao']); ?>
			</td></tr>
			
		

	</ul>
</table>
</div>

<div class="related">
	<h3><?php echo __('Comentários'); ?></h3>
	<?php if (!empty($produto['Comentario'])): ?>