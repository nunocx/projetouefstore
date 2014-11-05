<div class="comentarios index">
	<h3><?php echo __('Comentarios'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('Texto'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comentarios as $comentario): ?>
	<tr>
		<td><?php echo h($comentario['Comentario']['id']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['Data']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['Texto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comentario['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $comentario['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comentario['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $comentario['Servico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comentario['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $comentario['Produto']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comentario['Comentario']['id']), array(), __('Are you sure you want to delete # %s?', $comentario['Comentario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros no  total {:count}, começando no registro {:start}, terminando no {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Comentario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
