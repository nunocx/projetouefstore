<div class="administradors index">
	<h3><?php echo __('Administrador'); ?></h3>
	
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id',$title='Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Email',$title='E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone1',$title='Celular'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone2',$title='Telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Nascimento',$title='Data de Nasc.'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	
	<tbody>
	<?php foreach ($administradors as $administrador): ?>
	<tr>
		<td><?php echo h($administrador['Administrador']['id']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Email']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['name']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Telefone1']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Telefone2']); ?>&nbsp;</td>
		<td><?php echo h($administrador['Administrador']['Data_Nascimento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $administrador['Administrador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $administrador['Administrador']['id']), array(), __('Você deseja deletar # %s?', $administrador['Administrador']['name'])); ?>
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