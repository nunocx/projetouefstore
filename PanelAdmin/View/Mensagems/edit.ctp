<div class="mensagems form">
<?php echo $this->Form->create('Mensagem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mensagem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Assunto');
		echo $this->Form->input('Texto');
		echo $this->Form->input('Data');
		echo $this->Form->input('administrador_id');
		echo $this->Form->input('Destinatario');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mensagem.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mensagem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
