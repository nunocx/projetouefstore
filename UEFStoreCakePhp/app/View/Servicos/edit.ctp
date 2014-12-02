<div class="servicos form">
<?php echo $this->Form->create('Servico',array('type'=>'file'));
		echo $this->Form->hidden('id');
?>
	<fieldset>
		<legend><h3><?php echo __('Alterar Serviço'); ?></h3></legend>
	<div class="form-group">
		<?php
         	echo $this->Form->input('name',array('label'=>'Titulo:', 'class'=>'form-control'));
         	echo $this->Form->input('Descricao',array('rows'=>'3','label'=>'Descrição:', 'class'=>'form-control'));
         	echo $this->Upload->edit('Servico', $this->Form->fields['Servico.id']);
         	echo $this->Form->input('Preco',array('label'=>'Preço:', 'class'=>'form-control'));
         	echo $this->Form->checkbox('ACombinar',array('value' => '1','hiddenField'=>'0', 'label'=>'Preço a combinar'));
         	echo $this->Form->label('Pre&ccedil;o a combinar');
         ?>
         </br >
		<?php
			echo $this->Form->label('Foto Principal do Anuncio');
         	echo $this->Form->file('Servico.Foto_Video'); 
         	?>
         </p>
         </br >
        
		
		<?php
			echo $this->Form->input('category_id',array( 'class'=>'form-control'));
		?>
	</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>