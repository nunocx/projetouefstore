<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('Email');
		echo $this->Form->input('name');
		echo $this->Form->input('Senha');
		echo $this->Form->input('Telefone1');
		echo $this->Form->input('Data_Nascimento');
		echo $this->Form->input('Sexo');
		echo $this->Form->input('Telefone2');
		echo $this->Form->input('Foto');
		echo $this->Form->input('Strikes');
		echo $this->Form->input('Status');
		echo $this->Form->input('VotosPositivos');
		echo $this->Form->input('VotosNegativos');
		echo $this->Form->input('regra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Negociacaos'), array('controller' => 'negociacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Negociacao'), array('controller' => 'negociacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terceiros'), array('controller' => 'terceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terceiro'), array('controller' => 'terceiros', 'action' => 'add')); ?> </li>
	</ul>
</div>
