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
 			<tr>

	 			<?php 
	 			
	 			foreach ($negociacao as $negociacaos): 
						$id = $usuarios['Usuario']['id'];
							//debug($usuarios) or die ();
						$iid = $negociacaos['Negociacao']['interessado'];
						if( $id == $iid ):
						?>
				 				<?php 
				 					 
								foreach ($produtos as $produto) :?>
								 <td>
								 <?php	if($negociacaos['Negociacao']['produto_id'] == $produto['Produto']['id'])
									 	echo $produto['Produto']['name']; ?> 
								 </td>
								 		<?php
								 			$r = 0;
									 		foreach ($comentarios as $comentario):
									 		//echo 'l';
									 		//	debug(	$comentario['Comentario']['produto_id'] . $produto['Produto']['id']	) or die();
									 		if(($comentario['Comentario']['produto_id'] ==  $produto['Produto']['id'])) 
									 			if ($negociacaos['Negociacao']['status'] == 0):
									 				if($r==1)
									 				break;
									 		?>	
									 			<td>
									 				<?php	//echo $comentario['Comentario']['Texto'];

									 				 echo $this->Html->link(__('Comente'), array('controller' => 'comentarios', 'action' => 'add/'.$id.'/'.$produto['Produto']['id'].'/'.NULL.'')); 
									 				 $r =1;
									 				?>

									 			</td>
									 			
									 		<?php endif; 
									 		endforeach; ?>
									 			
			 					<?php endforeach; ?>
		 			<?php endif; ?>
 			<?php endforeach; ?>
 			</tr>
 	</table>

