<div class="administradors form">
<?php echo $this->Form->create('Administrador'); 
	echo $this->Form->hidden('id');
?>
	<fieldset>
		<legend><?php echo __('Atualizar Dados'); ?></legend>
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
			<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('controller' => 'anuncioterceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
	</ul>
</div>
