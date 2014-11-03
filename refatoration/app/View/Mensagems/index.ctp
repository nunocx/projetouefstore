<div class="mensagems index">
	<h2><?php echo __('Mensagems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('Texto'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuariosR_Email'); ?></th>
			<th><?php echo $this->Paginator->sort('usuariosE_Email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mensagems as $mensagem): ?>
	<tr>
		<td><?php echo h($mensagem['Mensagem']['id']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Assunto']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Texto']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mensagem['Administrador']['id'], array('controller' => 'administradors', 'action' => 'view', $mensagem['Administrador']['id'])); ?>
		</td>
		<td><?php echo h($mensagem['Mensagem']['usuariosR_Email']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['usuariosE_Email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mensagem['Mensagem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mensagem['Mensagem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mensagem['Mensagem']['id']), array(), __('Are you sure you want to delete # %s?', $mensagem['Mensagem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mensagem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
