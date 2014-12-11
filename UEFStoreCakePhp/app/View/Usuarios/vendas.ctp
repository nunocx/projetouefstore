<div class="usuarios view">
<h3><?php echo __('Minhas Vendas');

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
 				<th><?php echo __('Permita o comentário.'); ?></th>
 			</tr>
 			
 			<!-- Achando as negociações que o usuario escolhido possue -->
 			<?php 
 			 			foreach ($negociacao as $negocio):  ?>
	 		<tr>
	 			<?php 	if ($negocio['Negociacao']['usuario_id'] == $usuarios['Usuario']['id'] ):  ?>	
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
	 					<?php if($negocio['Negociacao']['produto_id'] != null ): ?> 
	 					<li><a href="<?php echo $this->Html->url('/comentarios/permissao/'.$negocio['Negociacao']['interessado'].'/'.$negocio['Negociacao']['produto_id'].'/'.'null'); ?>"> Permita que <?php 
	 							$usuario_s = $this->requestAction('/usuarios/puxarUser/'.$negocio['Negociacao']['interessado']);
	 					echo $usuario_s['Usuario']['name']; ?> comente o produto ! </a> </li>					
	 					<?php elseif($negocio['Negociacao']['servico_id'] != null ): ?>
	 						<li><a href="<?php echo $this->Html->url('/comentarios/permissao/'.$negocio['Negociacao']['interessado'].'/'.'null'.'/'.$negocio['Negociacao']['servico_id']); ?>"> Permita que <?php 
	 						$usuario_s = $this->requestAction('/usuarios/puxarUser/'.$negocio['Negociacao']['interessado']);
	 						echo $usuario_s['Usuario']['name']; 

	 						?> comente o serviço ! </a> </li>	
	 					<?php else:?>
	 					<?php endif; ?>
	 					</td>
	 			<?php endif;?>
	 		</tr>
 			<?php endforeach; ?>
 		
 	</table>
	</div>
</div>