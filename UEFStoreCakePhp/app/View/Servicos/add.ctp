<div class="servicos form">
<?php echo $this->Form->create('Servico',array('type' => 'file')); ?>
	<fieldset>
		<legend><h3><?php echo __('Cadastrar Serviço'); ?></h3></legend>
	<div class="form-group">
		</br >
		<?php
         	echo $this->Form->input('name',array('label'=>'Titulo:', 'class'=>'form-control'));
        ?>
        </br >
        <?php
         	echo $this->Form->input('Descricao',array('rows'=>'3','label'=>'Descrição:', 'class'=>'form-control'));
			?>
		<p>
		</br >
		<?php
			echo $this->Form->label('Foto Principal do Anuncio');
         	echo $this->Form->file('Servico.Foto_Video'); 
         	
         	?>
         </p>
         </br >
         <?php
         	echo $this->Form->input('Preco',array('label'=>'Preço:', 'class'=>'form-control'));
         	?>
         	</br >
         <?php
         	echo $this->Form->checkbox('ACombinar',array('value' => '1','hiddenField'=>'0', 'label'=>'Preço a combinar'));
         	echo $this->Form->label('Pre&ccedil;o a combinar');
         ?>
         <p><?php
			echo $this->Form->hidden('Data_Publicacao',array('disable'=>'true',
							 'label' => 'Data de Publicação:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
		<p><?php
			echo $this->Form->hidden('Data_Vencimento',array('disable'=>'true',
							 'label' => 'Data de Vencimento:',
							'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));?>
		</p>
		<p><?php
			echo $this->Form->hidden('Quantidade',array('class'=>'form-control','value'=>'0'));?></p>
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