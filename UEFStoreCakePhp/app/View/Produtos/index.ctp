<div class="produtos index">
	<h3><?php echo __('Produtos'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name',$title='Titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('Descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('Preco',$title='Preço'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Publicacao'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('Quantidade'); ?></th>
			<th><?php echo $this->Paginator->sort('Foto_Video'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['name']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Descricao']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Preco']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Data_Publicacao']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Data_Vencimento']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Quantidade']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Foto_Video']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $produto['Produto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $produto['Produto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?>
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