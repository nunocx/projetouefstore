<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><h3><?php echo __('Faça seu Comentario'); ?></h3></legend>
	<div class="form-group">
		<?php
			echo $this->Form->input('Texto',array('label'=>'Comentario:', 'class'=>'form-control'));
			echo $this->Form->input('usuario_id',array('label'=>'Usuario:', 'class'=>'form-control'));
			echo $this->Form->input('servico_id',array('label'=>'Id_prod:', 'class'=>'form-control'));
			echo $this->Form->input('produto_id',array('label'=>'Id_serv:', 'class'=>'form-control'));
			echo $this->Form->input('Data',array('label'=>'Data:',
				'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));

		?>
	</div>
	</fieldset>
	<button type="submit" class="btn btn-default">Comente</button>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comentarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
