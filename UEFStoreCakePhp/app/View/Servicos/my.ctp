<?php
$ok = $this->Session->read('Auth.User.Status');
//if($ok == 1)
if(isset($servicos)){
	$servico = $this->requestAction('servicos/my');
} else {
	echo "Não tem Serviços";
}

?>

<h3>Meus Serviços</h3>
				
	<?php 

	//if($ok == 1)
	foreach ($servico as $servicos):?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$produto['Servico']['id']); ?>">
					<?php echo $servicos['Servico']['name']?>
					</a></h4>
					

					<?php echo $this->Html->image($servicos['Servico']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">R$<?php echo $servicos['Servico']['Preco']?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4>
									<a href="<?php echo $this->Html->url('/produtos/view/'.$servicos['Servico']['id']); ?>">
									Mais Informações</a>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
	<?php endforeach;?>