<div class="usuarios view">
<h3><?php echo __('Minhas Negociações');

$negociacao = $this->requestAction('negociacaos/negocios');
$produtos = $this->requestAction('produtos/indexView');
$comentarios = $this->requestAction('comentarios/index');
$servicos = $this->requestAction('servicos/index');

?></h3>
 <!-- /.panel-heading -->
 <div class="panel-body">
 	<table class="table table-bordered table-hover table-striped">
 			<tr>
 				<th><?php echo __('Negociações'); ?></th>
 				<th><?php echo __('Comentar'); ?></th>
 			</tr>
 			
 			<!-- Achando as negociações que o usuario escolhido possue -->
 			<?php 
 			 			foreach ($negociacao as $negocio):  ?>
	 		<tr>
	 			<?php 	if ($negocio['Negociacao']['interessado'] == $usuarios['Usuario']['id'] ):  ?>	
	 					<td> 
	 						<?php 
	 						foreach ($produtos as $produto) {
	 								if($produto['Produto']['id']==$negocio['Negociacao']['produto_id'] 
	 									&& $negocio['Negociacao']['servico_id']== null)
	 								{
	 									echo $produto['Produto']['name'];
	 									break;
	 								}
	 							}
	 						foreach ($servicos as $servico){
	 							if($servico['Servico']['id']==$negocio['Negociacao']['servico_id'] 
		 										&& $negocio['Negociacao']['produto_id']==null)
	 							{
		 								echo $servico['Servico']['name'];
		 								break;	
		 						}
		 					}
	 						 ?>

	 					</td>
	 					<td>
	 					<?php if(($negocio['Negociacao']['status']==1 ) && $negocio['Negociacao']['produto_id'] != null ): ?> 
	 					<li><a href="<?php echo $this->Html->url('/comentarios/adds/'.$usuarios['Usuario']['id'].'/'.$negocio['Negociacao']['produto_id'].'/'.null); ?>"> Comente este produto now ! </a> </li>					
	 					<?php elseif(($negocio['Negociacao']['status']==1 ) && $negocio['Negociacao']['servico_id'] != null ): ?>
	 						<li><a href="<?php echo $this->Html->url('/comentarios/adds/'.$usuarios['Usuario']['id'].'/'.$negocio['Negociacao']['servico_id'].'/'.null); ?>"> Comente este produto now ! </a> </li>	
	 					<?php else:?>
	 						<h1> Você não tem permissão para comentar este produto. </h1>
	 					<?php endif; ?>
	 					</td>
	 			<?php endif;?>
	 		</tr>
 			<?php endforeach; ?>
 		
 	</table>
	</div>
</div>