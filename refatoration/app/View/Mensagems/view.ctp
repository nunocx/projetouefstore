<div class="mensagems view">
<h2><?php echo __('Mensagem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['Assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['Texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['Data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mensagem['Administrador']['name'], array('controller' => 'administradors', 'action' => 'view', $mensagem['Administrador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destinatario'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['Destinatario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emisor'); ?></dt>
		<dd>
			<?php echo h($mensagem['Mensagem']['Emisor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mensagem'), array('action' => 'edit', $mensagem['Mensagem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mensagem'), array('action' => 'delete', $mensagem['Mensagem']['id']), array(), __('Are you sure you want to delete # %s?', $mensagem['Mensagem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
