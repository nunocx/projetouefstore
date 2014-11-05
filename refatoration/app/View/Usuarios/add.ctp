<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><h3><?php echo __('Cadastro Usuario'); ?></h3></legend>
	

		<div class="form-group">
           <?php
           		echo $this->Form->input('Email', array('label'=>'E-mail:', 'class'=>'form-control'));?>
          		 <p class="help-block">Exemplo: name@exemplo.com </p>
        
           <?php echo $this->Form->input('name',array('label'=>'Nome:', 'class'=>'form-control')); 
           		 echo $this->Form->input('Senha',array('label'=>'Senha:', 'class'=>'form-control'));
           		 echo $this->Form->input('Telefone1',array('label'=>'Celular:', 'class'=>'form-control'));  ?>
           		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
           	<?php	 echo $this->Form->input('Telefone2',array('label'=>'Telefone (opcional):', 'class'=>'form-control')); ?>
           		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
           	<?php
           		 echo $this->Form->radio('Sexo', array('M'=>'Masculino','F'=>'Feminino'));
           	?>
           	<p>
           	<?php
           		 echo $this->Form->input('Data_Nascimento',
           		 	array( 'label' => 'Data de Nascimento:'
                           , 'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));
           		 	?>
           	</p>
           		 	<p>
           	<?php 
           		 echo $this->Form->file('Foto',array('class'=>'form-control'));
           	?>
      		        </p>
           	<?php
           		 
           		 echo $this->Form->checkbox('Status', array( 'value' => '0','hiddenField' =>'1','class'=>'checkbox-inline')); ?>
           	&nbsp;
           	<?php echo $this->Form->label('Aceitos os termos do portal');?>	
           
        </div>
        	<button type="submit" class="btn btn-default">Cadastrar</button>
        	<button type="reset" class="btn btn-default">Reset</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
