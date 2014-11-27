<div class="negociacaos form">
<?php echo $this->Form->create('Negociacao'); ?>
	<fieldset>
		<legend><?php echo __('Add Negociacao'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('produto_id');
		echo $this->Form->input('servico_id');
		echo $this->Form->input('interessado');
		echo $this->Form->input('data_final');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>