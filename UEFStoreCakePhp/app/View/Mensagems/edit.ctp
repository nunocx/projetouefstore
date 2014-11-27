
<div class="mensagems form">
<?php echo $this->Form->create('Mensagem');
echo $this->Form->hidden('id'); ?>
	<fieldset>
		<legend><h3><?php echo __('Alterar Mensagem'); ?></h3></legend>
		<div class="form-group">
			<?php
				echo $this->Form->input('Assunto',array('label'=>'Assunto', 'class'=>'form-control'));
				echo $this->Form->input('Texto',array('label'=>'Mensagem', 'class'=>'form-control'));
				echo $this->Form->input('administrador_id',array('label'=>'Admininstrador', 'class'=>'form-control'));
				echo $this->Form->input('Destinatario',array('label'=>'Destinatario', 'class'=>'form-control'));
				echo $this->Form->input('Emisor',array('label'=>'Emisor', 'class'=>'form-control'));
			?>
			<p><?php
			echo $this->Form->input('Data',array(
							 'label' => 'Data',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
		</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>