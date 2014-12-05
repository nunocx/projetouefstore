<div class="category view">
	<h3> <?php echo __('Categoria'); echo __('&nbsp;&nbsp;&nbsp;'); echo h($category['Category']['name']); ?> </h3>

<h3>Produtos</h3>

<?php	if($produtos != null):	?>
	<?php 
	foreach ($produtos as $produto):
		?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$produto['Produto']['id']); ?>">
					<?php echo $produto['Produto']['name']?>
					</a></h4>
					<a href="<?php echo $this->Html->url('/produtos/view/'.$produto['Produto']['id']); ?>"></a>

					<?php echo $this->Html->image($produto['Produto']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">R$<?php echo $produto['Produto']['Preco']?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4>
									<a href="<?php echo $this->Html->url('/produtos/view/'.$produto['Produto']['id']); ?>">
									Mais Informações</a>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
	<?php endforeach;?>
<?php else:?>
	<h4>Não há produtos desta categoria</h4>
<?php endif;?>
<h3>Serviços</h3>
	<div class="content">	
	<?php	if($servicos != null):	?>
	<?php foreach ($servicos as $servico):?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="<?php echo $this->Html->url('/servicos/view/'.$servico['Servico']['id']); ?>">
					<?php echo $servico['Servico']['name']?>
					</a></h4>
					<a href="<?php echo $this->Html->url('/servicos/view/'.$servico['Servico']['id']); ?>">
					<?php echo $this->Html->image($servico['Servico']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">R$<?php echo $servico['Servico']['Preco']?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4>

									<a href="
									<?php 
									echo 
										$this->Html->url('/servicos/view/'.$servico['Servico']['id']); ?>">Mais Info</a>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
	<?php endforeach;?>
<?php else:?>
	<h4>Não há serviços desta categoria</h4>
<?php endif;?>
	
</div>