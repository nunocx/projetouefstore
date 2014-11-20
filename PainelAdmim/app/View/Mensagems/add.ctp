<div class="mensagems form">
<?php echo $this->Form->create('Mensagem'); ?>
	<fieldset>
		<legend><?php echo __('Mandar Mensagem'); ?></legend>
	<?php
		echo $this->Form->input('Assunto');
		echo $this->Form->input('Texto');
		echo $this->Form->input('Data');
		echo $this->Form->input('Destinatario');
		echo $this->Form->input('Emisor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('enviar')); ?>
</div>