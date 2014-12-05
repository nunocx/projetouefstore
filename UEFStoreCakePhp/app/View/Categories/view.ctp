<div class="category view">
<?php 
		$produtos = $this->requestAction('/produtos/prodCategoria/'.$category['Category']['id']);
		$servicos = $this->requestAction('/servicos/servCategoria/'.$category['Category']['id']);
?>
	<h3> <?php echo __('Categoria'); echo __('&nbsp;&nbsp;&nbsp;'); echo h($category['Category']['name']); ?> </h3>
		<?php 	foreach ($produtos as $produto): ?>
					<div class="grid_1_of_4 images_1_of_4">
						<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$produto['produtos']['id']); ?>">
						<?php echo $produto['produtos']['name']?>
						</a></h4>
						<a href="<?php echo $this->Html->url('/produtos/view/'.$produto['produtos']['id']); ?>"></a>

						<?php echo $this->Html->image($produto['produtos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
						 <div class="price-details">
					       <div class="price-number">
								<p><span class="rupees">R$<?php echo $produto['produtos']['Preco']?></span></p>
						    </div>
						       		<div class="add-cart">								
										<h4>
										<a href="<?php echo $this->Html->url('/produtos/view/'.$produto['produtos']['id']); ?>">
										Mais Informações</a>
										</h4>
								     </div>
								 <div class="clear"></div>
						</div>
					 </div>
		<?php endforeach;?>
		<?php foreach ($servicos as $servico):?>
			<div class="grid_1_of_4 images_1_of_4">
						<h4><a href="<?php echo $this->Html->url('/servicos/view/'.$servico['servicos']['id']); ?>">
						<?php echo $servico['servicos']['name']?>
						</a></h4>
						<a href="<?php echo $this->Html->url('/servicos/view/'.$servico['servicos']['id']); ?>"></a>

						<?php echo $this->Html->image($servico['servicos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
						 <div class="price-details">
					       <div class="price-number">
								<p><span class="rupees">R$<?php echo $servico['servicos']['Preco']?></span></p>
						    </div>
						       		<div class="add-cart">								
										<h4>
										<a href="<?php echo $this->Html->url('/servicos/view/'.$servico['servicos']['id']); ?>">
										Mais Informações</a>
										</h4>
								     </div>
								 <div class="clear"></div>
						</div>
					 </div>	
		<?php endforeach;?>
</div>
