<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>