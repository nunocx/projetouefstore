<?php	
$servicos = $this->requestAction('servicos/index');
?>
	<h3>Todos os serviços	</h3>
	<div class="content">			
	<?php foreach ($servicos as $servico):?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="<?php echo $this->Html->url('/servicos/view/'.$servico['Servico']['id']); ?>">
					<?php echo $servico['Servico']['name']?>
					</a></h4>
					<a href="<?php echo $this->Html->url('/servicos/view/'.$servico['Servico']['id']); ?>"></a>
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
</div>