<div class="category view">
<?php 
	$atual = (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;

		$prods = $this->requestAction('/produtos/prodCategoria/'.$category['Category']['id']);
		$servs = $this->requestAction('/servicos/servCategoria/'.$category['Category']['id']);
	if($prods != NULL OR $servs != NULL) {
		if(count($prods) > count($servs) ) {
				if(count($prods)%10 > 0){
					$contar = intval(count($prods)/10)+1;
				} else {
					$contar = count($prods)/10;
				}
		} else {
			if(count($servs)%10 > 0){
					$contar = intval(count($servs)/10)+1;
			} else {
				$contar = count($servs)/10;
			}
		}

		$tdosProdutos = array_chunk($this->requestAction('/produtos/prodCategoria/'.$category['Category']['id']), 10);
		$tdosServicos = array_chunk($this->requestAction('/servicos/servCategoria/'.$category['Category']['id']), 10);
		$produtos = $tdosProdutos[$atual-1];
		$servicos = $tdosServicos[$atual-1];
?>
	<h3> <?php echo __('Categoria'); echo __('&nbsp;&nbsp;&nbsp;'); echo h($category['Category']['name']); ?> </h3>
	<div class="section group">
		<?php foreach ($produtos as $produto): ?>
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
		<?php endforeach; ?>
		 </div>
		 <br />
		<!-- Paginação -->

	<ul class="paginacao">
		<?php 
			for($i = 1; $i < $contar; $i++) {
				if($i == $atual) { ?>
						<li><a class="ativo" href="#"><?php echo $i ?></a></li>
			<?php 	} else { ?>
						<li><a href="?pg=<?php echo $i;?>"><?php echo $i ?> </a></li>
			<?php	}
			} ?>
	</ul>
		<!-- Fim Paginação -->
	<?php } else { ?>
		<h3> <?php echo __('Categoria'); echo __('&nbsp;&nbsp;&nbsp;'); echo h($category['Category']['name']); ?> </h3>
		<P>Nenhum anúncios cadastrado na categoria</P>
<?php }
		?>
</div>
