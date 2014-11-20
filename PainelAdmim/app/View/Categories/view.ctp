<div class="categories view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Código: ').$category['Category']['id']; ?></dt>
		
		<dt><?php echo __('Nome: ').$category['Category']['name']; ?></dt>
		
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Produtos Relacionados'); ?></h3>
	<?php if (!empty($category['Produto'])): ?>
	<table class="table table-bordered">
	<tr>
		<th><?php echo __('Cod'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Preço'); ?></th>
		<th><?php echo __('Quantidade'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Expirado'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($category['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id']; ?></td>
			<td><?php echo $produto['name']; ?></td>
			<td><?php echo $produto['Preco']; ?></td>
			<td><?php echo $produto['Quantidade']; ?></td>
			<td><?php echo $produto['Bloqueado']; ?></td>
			<td><?php echo $produto['Expirado']; ?></td>
			<td><?php echo $produto['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array(), __('Você deseja deletar este produto  # %s?', $produto['name'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Servicos Relacionados'); ?></h3>
	<?php if (!empty($category['Servico'])): ?>
	<table class="table table-bordered">
	<tr>
		<th><?php echo __('Cod'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Expirado'); ?></th>
		<th><?php echo __('ACombinar'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($category['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['id']; ?></td>
			<td><?php echo $servico['name']; ?></td>
			<td><?php echo $servico['Preco']; ?></td>
			<td><?php echo $servico['Bloqueado']; ?></td>
			<td><?php echo $servico['Expirado']; ?></td>
			<td><?php echo $servico['ACombinar']; ?></td>
			<td><?php echo $servico['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), array(), __('Você dejesa deletar # %s?', $servico['name'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
