<div class="usuarios index">
	<h3><?php echo __('Usuarios'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
				<th><?php echo $this->Paginator->sort('Email'); ?></th>
				<th><?php echo $this->Paginator->sort('Telefone1',$title='Celular'); ?></th>
				<th><?php echo $this->Paginator->sort('Data_Nascimento'); ?></th>
				<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
				<th class="actions"><?php echo __('Ações'); ?></th>
		</tr>
		</thead>

		<tbody>
			<?php foreach ($usuarios as $usuario): ?>
				<tr>
					<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
					<td><?php echo h($usuario['Usuario']['name']); ?>&nbsp;</td>
					<td><?php echo h($usuario['Usuario']['Email']); ?>&nbsp;</td>
					<td><?php echo h($usuario['Usuario']['Telefone1']); ?>&nbsp;</td>
					<td><?php echo h($usuario['Usuario']['Data_Nascimento']); ?>&nbsp;</td>
					<td><?php echo h($usuario['Usuario']['Sexo']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
