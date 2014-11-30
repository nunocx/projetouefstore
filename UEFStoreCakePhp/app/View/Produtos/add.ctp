<div class="produtos form">
<?php echo $this->Form->create('Produto',array('type'=>'file')); ?>
	<fieldset>
		<legend><h3><?php echo __('Cadastrar Produto'); ?></h3></legend>
	<div class="form-group">
	</br >
		<?php
         	echo $this->Form->input('name',array('label'=>'Titulo:', 'class'=>'form-control'));
         	?>
         	   </br >	
         <?php
         	echo $this->Form->input('Descricao',array('rows'=>'3','label'=>'Descrição:', 'class'=>'form-control'));
         ?>
         </br >
		<?php
			echo $this->Form->label('Foto Principal do Anuncio');
         	echo $this->Form->file('Produto.Foto_Video');
         ?>
         </br>
         <?php 
         	echo $this->Form->input('Preco',array('label'=>'Preço:', 'class'=>'form-control'));
         ?>	
         </p>
         </br >
        
		<p><?php
			echo $this->Form->input('Quantidade',array('class'=>'form-control'));?></p>
		<?php
			echo $this->Form->hidden('Bloqueado',array('value'=>'0'));
			echo $this->Form->hidden('Expirado',array('value'=>'0'));
			echo $this->Form->input('usuario_id',array( 'class'=>'form-control'));
			echo $this->Form->input('category_id',array( 'class'=>'form-control'));
		?>
	</div>
		<button type="submit" class="btn btn-default">Cadastrar</button>
        <button type="reset" class="btn btn-default">Reset Informações</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>