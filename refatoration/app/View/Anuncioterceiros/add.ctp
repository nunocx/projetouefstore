<div class="anuncioterceiros form">
<?php echo $this->Form->create('Anuncioterceiro'); ?>
	<fieldset>
		<legend><?php echo __('Cadastro Anuncios Tercerizados'); ?></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('Nome',array('label'=>'Titulo:', 'class'=>'form-control'));
		echo $this->Form->input('NomeEmpresa',array('label'=>'Empresa:', 'class'=>'form-control'));
		?>
	<p>
	<p>	
	<?php	
		echo $this->Form->file('Imagem',array('class'=>'form-control'));
	?></p></p>
	<?php
		echo $this->Form->input('ValorPago',array('class'=>'form-control')); ?>
	<p><?php
		echo $this->Form->input('DataInicio');
	?></p>
	<?php
		echo $this->Form->input('administrador_id',array('label'=>'Adminstrador ID', 'class'=>'form-control'));
	?>
	</div>
		<button type="submit" class="btn btn-default">Cadastrar</button>
        <button type="reset" class="btn btn-default">Reset Informações</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
