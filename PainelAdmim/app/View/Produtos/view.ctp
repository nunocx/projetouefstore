<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Publicacao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Data_Publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Data_Vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Video'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Foto_Video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expirado'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Expirado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CondicaoUso'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['CondicaoUso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Negociacaos'), array('controller' => 'negociacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Negociacao'), array('controller' => 'negociacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($produto['Comentario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Comentario'] as $comentario): ?>
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
	<h3><?php echo __('Related Negociacaos'); ?></h3>
	<?php if (!empty($produto['Negociacao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Interessado'); ?></th>
		<th><?php echo __('Data Final'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Negociacao'] as $negociacao): ?>
		<tr>
			<td><?php echo $negociacao['id']; ?></td>
			<td><?php echo $negociacao['usuario_id']; ?></td>
			<td><?php echo $negociacao['produto_id']; ?></td>
			<td><?php echo $negociacao['servico_id']; ?></td>
			<td><?php echo $negociacao['interessado']; ?></td>
			<td><?php echo $negociacao['data_final']; ?></td>
			<td><?php echo $negociacao['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'negociacaos', 'action' => 'view', $negociacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'negociacaos', 'action' => 'edit', $negociacao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'negociacaos', 'action' => 'delete', $negociacao['id']), array(), __('Are you sure you want to delete # %s?', $negociacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Negociacao'), array('controller' => 'negociacaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reports'); ?></h3>
	<?php if (!empty($produto['Report'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Servico Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($produto['Report'] as $report): ?>
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
