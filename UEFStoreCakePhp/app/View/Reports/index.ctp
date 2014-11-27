<div class="reports index">
	<h3><?php echo __('Denuncias'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Texto'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reports as $report): ?>
	<tr>
		<td><?php echo h($report['Report']['id']); ?>&nbsp;</td>
		<td><?php echo h($report['Report']['Texto']); ?>&nbsp;</td>
		<td><?php echo h($report['Report']['Data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($report['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $report['Produto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($report['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $report['Servico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($report['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $report['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $report['Report']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $report['Report']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $report['Report']['id']), array(), __('Are you sure you want to delete # %s?', $report['Report']['id'])); ?>
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