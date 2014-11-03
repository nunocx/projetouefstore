<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Add Produto'); ?></legend>
	<?php
		echo $this->Form->input('Nome');
		echo $this->Form->input('Descricao');
		echo $this->Form->input('Preco');
		echo $this->Form->input('Data_Publicacao');
		echo $this->Form->input('Data_Vencimento');
		echo $this->Form->input('Quantidade');
		echo $this->Form->input('Foto_Video');
		echo $this->Form->input('Bloqueado');
		echo $this->Form->input('Expirado');
		echo $this->Form->input('CondicaoUso');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('categor_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categors'), array('controller' => 'categors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categor'), array('controller' => 'categors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
