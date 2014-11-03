<div class="anuncioterceiros index">
	<h2><?php echo __('Anuncioterceiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('NomeEmpresa'); ?></th>
			<th><?php echo $this->Paginator->sort('Imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('ValorPago'); ?></th>
			<th><?php echo $this->Paginator->sort('DataInicio'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($anuncioterceiros as $anuncioterceiro): ?>
	<tr>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['id']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['Nome']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['NomeEmpresa']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['Imagem']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['ValorPago']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['DataInicio']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($anuncioterceiro['Administrador']['id'], array('controller' => 'administradors', 'action' => 'view', $anuncioterceiro['Administrador']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $anuncioterceiro['Anuncioterceiro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $anuncioterceiro['Anuncioterceiro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $anuncioterceiro['Anuncioterceiro']['id']), array(), __('Are you sure you want to delete # %s?', $anuncioterceiro['Anuncioterceiro']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
