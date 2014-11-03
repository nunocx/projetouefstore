<div class="servicos index">
	<h2><?php echo __('Servicos'); ?></h2>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('Preco'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Publicacao'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('Foto_Video'); ?></th>
			<th><?php echo $this->Paginator->sort('Bloqueado'); ?></th>
			<th><?php echo $this->Paginator->sort('Expirado'); ?></th>
			<th><?php echo $this->Paginator->sort('ACombinar'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categor_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($servicos as $servico): ?>
	<tr>
		<td><?php echo h($servico['Servico']['id']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Nome']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Descricao']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Preco']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Data_Publicacao']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Data_Vencimento']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Foto_Video']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Bloqueado']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Expirado']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['ACombinar']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servico['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($servico['Categor']['id'], array('controller' => 'categors', 'action' => 'view', $servico['Categor']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $servico['Servico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $servico['Servico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $servico['Servico']['id']), array(), __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categors'), array('controller' => 'categors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categor'), array('controller' => 'categors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
