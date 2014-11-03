<div class="administradors index">
	<h2><?php echo __('Administradors'); ?></h2>
	
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Nascimento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	
	<tbody>
	<?php foreach ($administradors as $administrador): ?>
	<tr>
		<td><?php echo h($administrador['Administrador']['id']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Email']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Nome']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Telefone1']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Telefone2']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Data_Nascimento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administrador['Administrador']['id']), array(), __('Are you sure you want to delete # %s?', $administrador['Administrador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('controller' => 'anuncioterceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
	</ul>
</div>
