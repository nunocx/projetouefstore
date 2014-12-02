<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><h3><?php echo __('Faça seu Comentario'); ?></h3></legend>
	<div class="form-group">
		<?php
		echo '</br>';
			echo $this->Form->input('Texto',array('label'=>'Comentario:', 'class'=>'form-control'));

			echo $this->Form->hidden('usuario_id',array('disabled' => 'true','type'=>'text','label'=>'Usuario:', 'class'=>'form-control','value'=>'interessado'));
			echo $this->Form->hidden('servico_id',array('disabled' => 'true','type'=>'text','label'=>'Id_prod:', 'class'=>'form-control','value'=>'serviço'));
			echo $this->Form->hidden('produto_id',array('disabled' => 'true','type'=>'text','label'=>'Id_serv:', 'class'=>'form-control','value'=>'produto'));
			//echo $this->Form->create('Data');  
			echo $this->Form->hidden('Data',array('disabled' => 'true',
				'dateFormat' => 'DMY'
                , 'minYear' => date('Y') - 90
                , 'maxYear' => date('Y') - 0 ));

             echo '</br>';
			 	echo $this->Form->checkbox('statos', array( 'value' => '1','hiddenField' =>'0','class'=>'checkbox-inline')).'&nbsp; '.$this->Form->label('Recomendo !');
	?>
	</div>
	</fieldset>
	<button type="submit" class="btn btn-default">Comente</button>
<?php echo $this->Form->end(); ?>
</div>