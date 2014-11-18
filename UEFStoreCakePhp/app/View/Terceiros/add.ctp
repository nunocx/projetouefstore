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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Terceiros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
