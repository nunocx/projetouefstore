<div class="categors form">
<?php echo $this->Form->create('Categor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Categor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Categor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
