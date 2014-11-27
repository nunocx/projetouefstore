<div class="terceiros form">
<?php echo $this->Form->create('Terceiro'); ?>
	<fieldset>
		<legend><?php echo __('Add Terceiro'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('NomeEmpresa');
		echo $this->Form->input('Imagem');
		echo $this->Form->input('ValorPago');
		echo $this->Form->input('category_id');
		echo $this->Form->input('DataInicio');
		echo $this->Form->input('link');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>