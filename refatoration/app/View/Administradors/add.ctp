<div class="administradors form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<legend><?php echo __('Add Administrador'); ?></legend>
	<?php
		echo $this->Form->input('Email');
		echo $this->Form->input('Nome');
		echo $this->Form->input('Senha');
		echo $this->Form->input('Telefone1');
		echo $this->Form->input('Telefone2');
		echo $this->Form->input('Data_Nascimento');
		echo $this->Form->input('Foto');
		echo $this->Form->input('Status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('controller' => 'anuncioterceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
	</ul>
</div>
