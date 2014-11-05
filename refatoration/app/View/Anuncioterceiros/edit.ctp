<div class="anuncioterceiros form">
<?php echo $this->Form->create('Anuncioterceiro');
		echo $this->Form->hidden('id');

 ?>
	<fieldset>
		<legend><h3><?php echo __('Cadastrar Anuncio Terceiro'); ?></h3></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('name',array('label'=>'Nome','class'=>'form-control'));
		echo $this->Form->input('NomeEmpresa',array('label'=>'Empresa','class'=>'form-control'));
		echo $this->Form->file('Imagem',array('class'=>'form-control'));
		echo $this->Form->input('ValorPago',array('label'=>'Valor','class'=>'form-control'));
	?>
		<p><?php
			echo $this->Form->input('DataInicio',array(
							 'label' => 'Data de Publicação:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
	<?php
		echo $this->Form->input('link',array('label'=>'Link','class'=>'form-control'));
		echo $this->Form->input('category_id',array('label'=>'Categoria','class'=>'form-control'));
		echo $this->Form->input('administrador_id',array('label'=>'Admininstrador','class'=>'form-control'));
	?>
	</div>
	</fieldset>
	<button type="submit" class="btn btn-default">Cadastrar</button>
<?php echo $this->Form->end(); ?>
</div>
<div style="margin-top: 10px;" class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
