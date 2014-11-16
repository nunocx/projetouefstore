<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone1'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Telefone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Data_Nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone2'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Telefone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strikes'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Strikes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['Status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VotosPositivos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['VotosPositivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VotosNegativos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['VotosNegativos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comentarios'); ?></h3>
	<?php if (!empty($usuario['Comentario'])): ?>
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
	<?php foreach ($usuario['Comentario'] as $comentario): ?>
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
	<h3><?php echo __('Related Mensagems'); ?></h3>
	<?php if (!empty($usuario['Mensagem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assunto'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('Destinatario'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Mensagem'] as $mensagem): ?>
		<tr>
			<td><?php echo $mensagem['id']; ?></td>
			<td><?php echo $mensagem['Assunto']; ?></td>
			<td><?php echo $mensagem['Texto']; ?></td>
			<td><?php echo $mensagem['Data']; ?></td>
			<td><?php echo $mensagem['administrador_id']; ?></td>
			<td><?php echo $mensagem['Destinatario']; ?></td>
			<td><?php echo $mensagem['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mensagems', 'action' => 'view', $mensagem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mensagems', 'action' => 'edit', $mensagem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mensagems', 'action' => 'delete', $mensagem['id']), array(), __('Are you sure you want to delete # %s?', $mensagem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Produtos'); ?></h3>
	<?php if (!empty($usuario['Produto'])): ?>
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
	<?php foreach ($usuario['Produto'] as $produto): ?>
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
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), array(), __('Are you sure you want to delete # %s?', $produto['id'])); ?>
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
	<h3><?php echo __('Related Reports'); ?></h3>
	<?php if (!empty($usuario['Report'])): ?>
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
	<?php foreach ($usuario['Report'] as $report): ?>
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
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($usuario['Servico'])): ?>
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
	<?php foreach ($usuario['Servico'] as $servico): ?>
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
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), array(), __('Are you sure you want to delete # %s?', $servico['id'])); ?>
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
