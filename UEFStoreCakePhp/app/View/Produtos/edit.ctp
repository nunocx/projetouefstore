<div class="produtos form">
<?php echo $this->Form->create('Produto'); 
		echo $this->Form->hidden('id');
?>
	<fieldset>
		<legend><h3><?php echo __('Alterar Produto'); ?></h3></legend>
	<div class="form-group">
		<?php
         	echo $this->Form->input('name',array('label'=>'Titulo:', 'class'=>'form-control'));
         	echo $this->Form->input('Descricao',array('rows'=>'3','label'=>'Descrição:', 'class'=>'form-control'));
         	echo $this->Upload->edit('Produto', $this->Form->fields['Produto.id']);
         	echo $this->Form->input('Preco',array('label'=>'Preço:', 'class'=>'form-control'));
         ?>
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
		<p><?php
			echo $this->Form->input('Quantidade',array('class'=>'form-control'));?></p>
		<?php
			echo $this->Form->hidden('Bloqueado',array('value'=>'0'));
			echo $this->Form->hidden('Expirado',array('value'=>'0'));
			echo $this->Form->hidden('CondicaoUso',array('rows'=>'1','label'=>'Condição de Uso:', 'class'=>'form-control'));
			echo $this->Form->input('usuario_id',array( 'class'=>'form-control'));
			echo $this->Form->input('category_id',array( 'class'=>'form-control'));
		?>
	</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>