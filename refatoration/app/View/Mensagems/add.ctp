<div class="mensagems form">
<?php echo $this->Form->create('Mensagem'); ?>
	<fieldset>
		<legend><?php echo __('Enviar Mensagem'); ?></legend>
	<div class="form-group">
			
			<?php
				echo $this->Form->input('Assunto',array('label'=>'Assunto:', 'class'=>'form-control'));
				echo $this->Form->input('Texto',array('rows'=>'5','label'=>'Corpo da mensagem:', 'class'=>'form-control'));
				?>

				<p><?php
				echo $this->Form->input('Data',array(
							 'label' => 'Data:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
				</p>
			<?php
				echo $this->Form->input('administrador_id',array('label'=>'Admin:', 'class'=>'form-control'));
				echo $this->Form->input('usuariosR_Email',array('label'=>'Usuario Remetente:', 'class'=>'form-control'));
				echo $this->Form->input('usuariosE_Email',array('label'=>'Usuario Emisor:', 'class'=>'form-control'));
			?>
	</div>
	<button type="submit" class="btn btn-default">Enviar</button>
	</fieldset>

<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mensagems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
