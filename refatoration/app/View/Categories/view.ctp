<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Você tem certeza que deseja deletar: # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($category['Produto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('Data Publicacao'); ?></th>
		<th><?php echo __('Data Vencimento'); ?></th>
		<th><?php echo __('Quantidade'); ?></th>
		<th><?php echo __('Foto Video'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Expirado'); ?></th>
		<th><?php echo __('CondicaoUso'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['name']; ?></td>
			<td><?php echo $produto['Descricao']; ?></td>
			<td><?php echo $produto['Preco']; ?></td>
			<td><?php echo $produto['Data_Publicacao']; ?></td>
			<td><?php echo $produto['Data_Vencimento']; ?></td>
			<td><?php echo $produto['Quantidade']; ?></td>
			<td><?php echo $produto['Foto_Video']; ?></td>
			<td><?php echo $produto['Bloqueado']; ?></td>
			<td><?php echo $produto['Expirado']; ?></td>
			<td><?php echo $produto['CondicaoUso']; ?></td>
			<td><?php echo $produto['usuario_id']; ?></td>
			<td><?php echo $produto['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array(), __('Você tem certeza que deseja deletar: # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($category['Servico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('Data Publicacao'); ?></th>
		<th><?php echo __('Data Vencimento'); ?></th>
		<th><?php echo __('Foto Video'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Expirado'); ?></th>
		<th><?php echo __('ACombinar'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['id']; ?></td>
			<td><?php echo $servico['name']; ?></td>
			<td><?php echo $servico['Descricao']; ?></td>
			<td><?php echo $servico['Preco']; ?></td>
			<td><?php echo $servico['Data_Publicacao']; ?></td>
			<td><?php echo $servico['Data_Vencimento']; ?></td>
			<td><?php echo $servico['Foto_Video']; ?></td>
			<td><?php echo $servico['Bloqueado']; ?></td>
			<td><?php echo $servico['Expirado']; ?></td>
			<td><?php echo $servico['ACombinar']; ?></td>
			<td><?php echo $servico['usuario_id']; ?></td>
			<td><?php echo $servico['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), array(), __('Você tem certeza que deseja deletar: # %s?', $servico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
