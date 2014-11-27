<div class="administradors form">
<?php echo $this->Form->create('Administrador'); ?>
	<fieldset>
		<h3><legend><?php echo __('Cadastro Administrador'); ?></legend></h3>
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
			<button type="submit" class="btn btn-default">Cadastrar</button>
        	<button type="reset" class="btn btn-default">Reset Informações</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>