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