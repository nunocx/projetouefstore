<div class="anuncioterceiros index">
	<h3><?php echo __('Anuncio Terceiros'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id',$title='Id'); ?></th>
			<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('NomeEmpresa',$title='Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('Imagem',$title='Imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('ValorPago',$title='Valor Pago'); ?></th>
			<th><?php echo $this->Paginator->sort('DataInicio',$title='Data de Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('link',$title='Link'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id',$title='Categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id',$title='Administrador'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($anuncioterceiros as $anuncioterceiro): ?>
	<tr>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['id']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['name']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['NomeEmpresa']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['Imagem']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['ValorPago']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['DataInicio']); ?>&nbsp;</td>
		<td><?php echo h($anuncioterceiro['Anuncioterceiro']['link']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($anuncioterceiro['Category']['name'], array('controller' => 'categories', 'action' => 'view', $anuncioterceiro['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($anuncioterceiro['Administrador']['name'], array('controller' => 'administradors', 'action' => 'view', $anuncioterceiro['Administrador']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $anuncioterceiro['Anuncioterceiro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $anuncioterceiro['Anuncioterceiro']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $anuncioterceiro['Anuncioterceiro']['id']), array(), __('Você deseja deletar # %s?', $anuncioterceiro['Anuncioterceiro']['name'])); ?>
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
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
