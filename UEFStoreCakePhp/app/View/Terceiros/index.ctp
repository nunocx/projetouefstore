<div class="terceiros index">
	<h2><?php echo __('Terceiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('NomeEmpresa'); ?></th>
			<th><?php echo $this->Paginator->sort('Imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('ValorPago'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('DataInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($terceiros as $terceiro): ?>
	<tr>
		<td><?php echo h($terceiro['Terceiro']['id']); ?>&nbsp;</td>
		<td><?php echo h($terceiro['Terceiro']['name']); ?>&nbsp;</td>
		<td><?php echo h($terceiro['Terceiro']['NomeEmpresa']); ?>&nbsp;</td>
		<td><?php echo h($terceiro['Terceiro']['Imagem']); ?>&nbsp;</td>
		<td><?php echo h($terceiro['Terceiro']['ValorPago']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($terceiro['Category']['name'], array('controller' => 'categories', 'action' => 'view', $terceiro['Category']['id'])); ?>
		</td>
		<td><?php echo h($terceiro['Terceiro']['DataInicio']); ?>&nbsp;</td>
		<td><?php echo h($terceiro['Terceiro']['link']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($terceiro['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $terceiro['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $terceiro['Terceiro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $terceiro['Terceiro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $terceiro['Terceiro']['id']), array(), __('Are you sure you want to delete # %s?', $terceiro['Terceiro']['id'])); ?>
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