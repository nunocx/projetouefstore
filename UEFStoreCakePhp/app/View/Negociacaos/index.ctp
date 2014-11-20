<div class="negociacaos index">
	<h2><?php echo __('Negociacaos'); ?></h2>
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('interessado'); ?></th>
			<th><?php echo $this->Paginator->sort('data_final'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($negociacaos as $negociacao): ?>
	<tr>
		<td><?php echo h($negociacao['Negociacao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($negociacao['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $negociacao['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($negociacao['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $negociacao['Produto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($negociacao['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $negociacao['Servico']['id'])); ?>
		</td>
		<td><?php echo h($negociacao['Negociacao']['interessado']); ?>&nbsp;</td>
		<td><?php echo h($negociacao['Negociacao']['data_final']); ?>&nbsp;</td>
		<td><?php echo h($negociacao['Negociacao']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $negociacao['Negociacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $negociacao['Negociacao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $negociacao['Negociacao']['id']), array(), __('Are you sure you want to delete # %s?', $negociacao['Negociacao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Negociacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
