<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); 
echo $this->Form->hidden('id');?>
	<fieldset>
		<legend><?php echo __('Edita Dados'); ?></legend>
	<?php
		
		echo $this->Form->input('Email',array('disable'=>'true'));
		echo $this->Form->input('name');
		echo $this->Form->input('Senha');
		echo $this->Form->input('Telefone1');
		echo $this->Form->date('Data_Nascimento',array('label'=>'Data de Nascimento'));
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
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
