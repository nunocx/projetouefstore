<div class="produtos form">
<?php echo $this->Form->create('Produto',array('judy_type(array)'=>'file')); 
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
          </br >
		<?php
			echo $this->Form->label('Foto Principal do Anuncio');
         	echo $this->Form->file('Produto.Foto_Video');
         ?>
         </br>
		<p><?php
			echo $this->Form->input('Quantidade',array('class'=>'form-control'));?></p>
		<?php
			echo $this->Form->input('category_id',array( 'class'=>'form-control'));
		?>
	</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>