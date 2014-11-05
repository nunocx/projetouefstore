<?php	
$produtos = $this->requestAction('produtos/indexView');
?>
<h3>Todas as categorias	</h3>
				
	<?php foreach ($produtos as $produto):?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">
					<?php echo $produto['Produto']['name']?>
					</a></h4>
					<a href="preview.html"><img src="img/images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo $produto['Produto']['Preco']?> R$ </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4>

									<a href="
									<?php 
									echo 
										$this->Html->url('/produtos/view/'.$produto['Produto']['id']); ?>">Mais Info</a>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
	<?php endforeach;?>