<div class="reports form">
<?php echo $this->Form->create('Report'); 
	  echo $this->Form->hidden('id');	?>
	<fieldset>
		<legend><h3><?php echo __('Editar Denunciar'); ?></h3></legend>
	<div class="form-group">
		<?php
			echo $this->Form->input('Texto',array('label'=>'Texto:', 'class'=>'form-control'));
			echo $this->Form->input('Data',array(
							 'label' => 'Data:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));
			echo $this->Form->input('produto_id',array('class'=>'form-control'));
			echo $this->Form->input('servico_id',array('class'=>'form-control'));
			echo $this->Form->input('usuario_id',array('class'=>'form-control'));
		?>
	</div>
	<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>

<?php echo $this->Form->end(); ?>
</div>