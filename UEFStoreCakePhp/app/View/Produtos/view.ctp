<div class="produtos view">
<h3><?php echo strtoupper($produto['Produto']['name'])?></h3>
	<dl>
	<?php echo __('Publicado em:'); ?></dt>
		<dd>
			<?php echo ($produto['Produto']['Data_Publicacao']); ?>
			
		</dd>
		<div id="content">
		  <div class="col1">
		    <img class="product" src="img/<?php echo $produto['Produto']['id']; ?>.jpg"/></div></img>

		  </div>

		  <div id="col2">
		    <div id="price2">por R$<?php echo $produto['Produto']['Preco']?>,00</div>
		  </div>
		</div>
					 	
					 	<br/><a class="botaobolado" href="#">Comprar</a><br/><br/>
		<dt><?php echo __('Vendedor:'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
			&nbsp;
		</dd>
					    
		<div class="description">
		
		
		
		
		
		
		
	</b>
		
	</dl>
</div>
<div class="related">
	
	<ul>
		
		<table class="table table-bordered table-hover table-striped">
	<tr></br>
		<th><?php echo __('Descrição'); ?></th>
		
	</tr>
	<tr><td><?php echo h($produto['Produto']['Descricao']); ?>
			</td></tr>
			
		

	</ul>
</table>
</div>

<div class="related">
	<h3><?php echo __('Comentários'); ?></h3>
	<?php if (!empty($produto['Comentario'])): ?>
		<table class="table table-bordered table-hover table-striped">
	<tr>
		
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		
		
		
	</tr>
	<?php foreach ($produto['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['Data']; ?></td>
			<td><?php echo $comentario['Texto']; ?></td>
			<td><?php echo $comentario['usuario_id']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reports'); ?></h3>
	<?php if (!empty($produto['Report'])): ?>
		<table class="table table-bordered table-hover table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Report'] as $report): ?>
		<tr>
			<td><?php echo $report['id']; ?></td>
			<td><?php echo $report['Texto']; ?></td>
			<td><?php echo $report['Data']; ?></td>
			<td><?php echo $report['produto_id']; ?></td>
			<td><?php echo $report['servico_id']; ?></td>
			<td><?php echo $report['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reports', 'action' => 'view', $report['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reports', 'action' => 'edit', $report['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reports', 'action' => 'delete', $report['id']), array(), __('Are you sure you want to delete # %s?', $report['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
