<div class="mensagems view">
<h3><?php echo __('Mensagem'); ?></h3>
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