<div class="servicos view">
<h3><?php echo __('Servico'); ?></h3>
	<dl>
		
		<?php echo h($servico['Servico']['Descricao']);
			echo $this->Upload->view('Servico', $servico['Servico']['id']);

			 ?>

		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Descricao']); ?>
			&nbsp;
		</dd>


		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Publicacao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Data_Publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Data_Vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Video'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Foto_Video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expirado'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Expirado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ACombinar'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['ACombinar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servico'), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Servico'), array('action' => 'delete', $servico['Servico']['id']), array(), __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($servico['Comentario'])): ?>
	<table class="table table-bordered table-hover table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($servico['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['id']; ?></td>
			<td><?php echo $comentario['Data']; ?></td>
			<td><?php echo $comentario['Texto']; ?></td>
			<td><?php echo $comentario['usuario_id']; ?></td>
			<td><?php echo $comentario['servico_id']; ?></td>
			<td><?php echo $comentario['produto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), array(), __('Are you sure you want to delete # %s?', $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reports'); ?></h3>
	<?php if (!empty($servico['Report'])): ?>
	<table class="table table-bordered table-hover table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($servico['Report'] as $report): ?>
		<tr>
			<td><?php echo $report['id']; ?></td>
			<td><?php echo $report['Texto']; ?></td>
			<td><?php echo $report['Data']; ?></td>
			<td><?php echo $report['produto_id']; ?></td>
			<td><?php echo $report['servico_id']; ?></td>
			<td><?php echo $report['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reports', 'action' => 'view', $report['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reports', 'action' => 'edit', $report['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reports', 'action' => 'delete', $report['id']), array(), __('Are you sure you want to delete # %s?', $report['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
