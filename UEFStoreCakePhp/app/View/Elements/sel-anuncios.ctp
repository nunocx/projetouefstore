<?php
$ok = $this->Session->read('Auth.User.Status');
//if($ok == 1)
$todosprodutoss = $this->requestAction('/produtos/ultimosprodutos/');
$todosServicos = $this->requestAction('/servicos/ultimosServicos/');
$contP = $contS = 0;
for ($i=0; $i < 20; $i++) { 
	if($todosprodutoss[$i] == NULL AND $todosServicos[$i] == NULL) {
		break;
	} else {
		if($todosprodutoss[$i] != NULL) {
			$produtoss[$contP] = $todosprodutoss[$i];
			$contP++;
		}
		if($todosServicos[$i] != NULL) {
			$servicos[$contS] = $todosServicos[$i];
			$contS++;
		}
		if($contP+$contS >= 20){
			break;
		}
	}
}

?>
<h3>Últimos os anúncios</h3>
				
	<?php 
	foreach ($produtoss as $produtos):?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$produtos['produtos']['id']); ?>">
					<?php echo $produtos['produtos']['name']?>
					</a></h4>
					<a href="<?php echo $this->Html->url('/produtos/view/'.$produtos['produtos']['id']); ?>"></a>

					<?php echo $this->Html->image($produtos['produtos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">R$<?php echo $produtos['produtos']['Preco']?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4>
									<a href="<?php echo $this->Html->url('/produtos/view/'.$produtos['produtos']['id']); ?>">
									Mais Informações</a>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
	<?php endforeach;

	foreach ($servicos as $servico):?>
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
	