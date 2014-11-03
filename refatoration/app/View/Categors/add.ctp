<div class="categors form">
<?php echo $this->Form->create('Categor'); ?>
	<fieldset>
		<legend><?php echo __('Cadastar Categoria'); ?></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('Nome',array('label'=>'Nome:', 'class'=>'form-control'));
	?>
	</div>
	<button type="submit" class="btn btn-default">Cadastrar Categoria</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
