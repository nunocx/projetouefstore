<div class="servicos form">
<?php echo $this->Form->create('Servico'); ?>
	<fieldset>
		<legend><?php echo __('Cadastro de Serviço'); ?></legend>
		<div class="form-group">
		<?php
			echo $this->Form->input('Nome',array('label'=>'Titulo:', 'class'=>'form-control'));
			echo $this->Form->input('Descricao',array('rows'=>'4','label'=>'Descrição:', 'class'=>'form-control'));
			echo $this->Form->input('Preco',array('label'=>'Preço:', 'class'=>'form-control')); ?>
		<?php
           	echo $this->Form->checkbox('ACombinar', array( 'hiddenField' =>'0','class'=>'checkbox-inline')); ?>
           	&nbsp;
           	<?php echo $this->Form->label('Valor Acombinar');?>	
		<p><?php
			echo $this->Form->input('Data_Publicacao',array(
							 'label' => 'Data de Publicação:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
		<p><?php
			echo $this->Form->input('Data_Vencimento',array(
							 'label' => 'Data de Vencimento:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
		<p>
		<?php
			echo $this->Form->file('Foto_Video',array('label'=>'Foto/Video:', 'class'=>'form-control'));
			echo $this->Form->hidden('Bloqueado',array('value'=>'0'));
			echo $this->Form->hidden('Expirado',array('value'=>'0'));
			echo $this->Form->input('usuario_id');
			echo $this->Form->input('categor_id');
		?>
		</p>
		</div>
		<button type="submit" class="btn btn-default">Cadastrar Serviço</button>
        <button type="reset" class="btn btn-default">Reset Informações</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categors'), array('controller' => 'categors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categor'), array('controller' => 'categors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
