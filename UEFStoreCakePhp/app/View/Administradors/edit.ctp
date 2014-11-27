<div class="administradors form">
<?php echo $this->Form->create('Administrador'); 
	echo $this->Form->hidden('id');
?>
	<fieldset>
		<legend><h3><?php echo __('Atualizar Dados'); ?></h3></legend>
		<div class="form-group">
			<?php ?>
				<?php
				
		        	echo $this->Form->input('Email', array('label'=>'E-mail:', 'class'=>'form-control'));?>
		          	<p class="help-block">Exemplo: name@exemplo.com </p>
		          	<?php echo $this->Form->input('name',array('label'=>'Nome:', 'class'=>'form-control')); 
		           		 echo $this->Form->input('Senha',array('label'=>'Senha:', 'class'=>'form-control'));
		           		 echo $this->Form->input('Telefone1',array('label'=>'Celular:', 'class'=>'form-control'));  ?>
		           		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
		           	<?php	 echo $this->Form->input('Telefone2',array('label'=>'Telefone (opcional):', 'class'=>'form-control')); ?>
		           		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
		           
					<p>
		           	<?php
		           		 echo $this->Form->input('Data_Nascimento',
		           		 	array( 'label' => 'Data de Nascimento:'
		                           , 'dateFormat' => 'DMY'
		                           , 'minYear' => date('Y') - 90
		                           , 'maxYear' => date('Y') - 0 ));
		           		 	?>
		           	</p>

					<?php 
						echo $this->Form->file('Foto');
						echo $this->Form->hidden('Status',array('value'=>'1'));
					?>
		
		</div>
			<p><button type="submit" class="btn btn-default">Alterar</button></p>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>