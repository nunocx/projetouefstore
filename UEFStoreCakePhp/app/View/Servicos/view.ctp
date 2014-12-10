    	<h3><?php echo strtoupper($servico['Servico']['name'])?></h3>
    	<div class="section group">
				
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
								</br>
									<?php echo $this->Html->image($servico['Servico']['Foto_Video'],array('width'=>'460px','height'=>'240px'))?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php $abc = -1;?>
				<div class="desc span_3_of_2">									
					<div class="price">
						<p>Publicado em: <?php echo ($servico['Servico']['Data_Publicacao']); ?></p>
						<p>Preço: <span>R$<?php echo $servico['Servico']['Preco']?></span></p>
						<p>Categoria: <?php echo $this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id'])); ?></p>
						<p>Vendedor: <?php echo $this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?></p>

						<div class="button"><?php $idLogin  = 0 ; echo $this->Html->link(__('Negociar'), array('controller' => 'negociacaos', 'action' => 'adds', $idLogin ,$servico['Usuario']['id'],$servico['Servico']['id'],'null')); ?></div>

						<p></div><div class="button"><?php echo $this->Html->link(__('Enviar Mensagem'), array('controller' => 'mensagems', 'action' => 'pm_send_to/',$servico['Usuario']['id'] , $abc ,$servico['Servico']['id'])); ?></div>
					</div>
					
				<div class="share-desc">
									
					<div class="clear"></div>
				</div>
				 
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Descrição do Produto</li>

					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						&nbsp;&nbsp;&nbsp;<?php echo $servico['Servico']['Descricao']?>
					</div>
			</div>
		 </div>
	 </div>
	    </br>
<div class="related">
	<h3><?php echo __('Comentários'); ?></h3>
	<?php if (!empty($servico['Comentario'])): ?>
		

	<?php foreach ($servico['Comentario'] as $comentario): ?>
		<?php 

		if($comentario['statos'] == 1)
			echo '<span style="font-size:13px;">'.$comentario['Data'].'</span>'.'&nbsp;&nbsp;&nbsp;'. $comentario['Texto'].'&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-up"></i></br>';
		else
			echo '<span style="font-size:13px;">'.$comentario['Data'].'</span>'.'&nbsp;&nbsp;&nbsp;'. $comentario['Texto'].'&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down"></i></br>'; 
		?>
	<?php endforeach; ?>

<?php endif; ?>


</div>