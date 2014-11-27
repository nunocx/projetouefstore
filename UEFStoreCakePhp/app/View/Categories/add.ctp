<div class="category form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><h3><?php echo __('Cadastrar categoria'); ?></h3></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('name',array('label'=>'Nome', 'class'=>'form-control'));
	?>
	</div>
		<button type="submit" class="btn btn-default">Cadastrar</button>
        <button type="reset" class="btn btn-default">Reset</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>