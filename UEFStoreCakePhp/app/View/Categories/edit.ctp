<div class="category form">
<?php echo $this->Form->create('Category');
		echo $this->Form->hidden('id');
 ?>
	<fieldset>
		<legend><h3><?php echo __('Editar Categoria'); ?></h3></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('name',array('label'=>'Nome', 'class'=>'form-control'));
	?>
	</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>