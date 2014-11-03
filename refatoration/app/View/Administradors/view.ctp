<div class="administradors view">
<h2><?php echo __('Administrador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone1'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Telefone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone2'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Telefone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Data_Nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($administrador['Administrador']['Status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrador'), array('action' => 'edit', $administrador['Administrador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrador'), array('action' => 'delete', $administrador['Administrador']['id']), array(), __('Are you sure you want to delete # %s?', $administrador['Administrador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('controller' => 'anuncioterceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Anuncioterceiros'); ?></h3>
	<?php if (!empty($administrador['Anuncioterceiro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('NomeEmpresa'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th><?php echo __('ValorPago'); ?></th>
		<th><?php echo __('DataInicio'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrador['Anuncioterceiro'] as $anuncioterceiro): ?>
		<tr>
			<td><?php echo $anuncioterceiro['id']; ?></td>
			<td><?php echo $anuncioterceiro['Nome']; ?></td>
			<td><?php echo $anuncioterceiro['NomeEmpresa']; ?></td>
			<td><?php echo $anuncioterceiro['Imagem']; ?></td>
			<td><?php echo $anuncioterceiro['ValorPago']; ?></td>
			<td><?php echo $anuncioterceiro['DataInicio']; ?></td>
			<td><?php echo $anuncioterceiro['administrador_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'anuncioterceiros', 'action' => 'view', $anuncioterceiro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'anuncioterceiros', 'action' => 'edit', $anuncioterceiro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'anuncioterceiros', 'action' => 'delete', $anuncioterceiro['id']), array(), __('Are you sure you want to delete # %s?', $anuncioterceiro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mensagems'); ?></h3>
	<?php if (!empty($administrador['Mensagem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assunto'); ?></th>
		<th><?php echo __('Texto'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th><?php echo __('UsuariosR Email'); ?></th>
		<th><?php echo __('UsuariosE Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrador['Mensagem'] as $mensagem): ?>
		<tr>
			<td><?php echo $mensagem['id']; ?></td>
			<td><?php echo $mensagem['Assunto']; ?></td>
			<td><?php echo $mensagem['Texto']; ?></td>
			<td><?php echo $mensagem['Data']; ?></td>
			<td><?php echo $mensagem['administrador_id']; ?></td>
			<td><?php echo $mensagem['usuariosR_Email']; ?></td>
			<td><?php echo $mensagem['usuariosE_Email']; ?></td>
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
