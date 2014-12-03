<?php
$ok = $this->Session->read('Auth.User.Status');
//if($ok == 1)
$produtos = $this->requestAction('produtos/indexView');


?>
<h3>Todos os produtos</h3>
				
	<?php 
	//if($ok == 1)
	foreach ($produtos as $produto):?>
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
	