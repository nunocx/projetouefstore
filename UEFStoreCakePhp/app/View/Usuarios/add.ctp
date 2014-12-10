<div class="usuarios form">
  <?php echo $this->Form->create('Usuario',array('type' => 'file')); ?>
  	<fieldset>
  		
      <legend>
        <h3> <?php echo __('Cadastro Usuario'); ?> </h3>
      </legend>


  		<div class="form-group">
         
             <?php echo '</br>';
             		echo $this->Form->input('Email', array('label'=>'E-mail:', 'class'=>'form-control'));?>
            		 <p class="help-block">Exemplo: name@exemplo.com </p>
          
             <?php echo $this->Form->input('name',array('label'=>'Nome:', 'class'=>'form-control'));  echo '</br>';
             		 
                 echo $this->Form->input('Senha',array('type'=>'password','label'=>'Senha:', 'class'=>'form-control')); echo '</br>';
                 echo $this->Form->input('Senha_Confirmacao',array('type'=>'password','label'=>'Senha (Confirmação):', 'class'=>'form-control')); echo '</br>';

             		 echo $this->Form->input('Telefone1',array('label'=>'Celular:', 'class'=>'form-control'));  echo '</br>'; ?>
             		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
             	<?php	 echo $this->Form->input('Telefone2',array('label'=>'Telefone (opcional):', 'class'=>'form-control')); ?>
             		 <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
             	  
              <?php
               echo '</br>';
                 echo $this->Form->label('Foto ');
                echo $this->Form->file('Usuario.Foto'); 
                 echo '</br>';
             		 echo $this->Form->radio('Sexo', array('M'=>'Masculino','F'=>'Feminino'));
             	?>
             	<p>
             	<?php
               echo '</br>';
             		 echo $this->Form->input('Data_Nascimento',
             		 	array( 'label' => 'Data de Nascimento:'
                             , 'dateFormat' => 'DMY'
                             , 'minYear' => date('Y') - 90
                             , 'maxYear' => date('Y') - 0 ));
             		 	?>
             	</p>
             		 	
             	<?php
             		 echo '</br>';
             		 echo $this->Form->checkbox('Status', array( 'value' => '1','hiddenField' =>'0','class'=>'checkbox-inline')); 
             		 echo $this->Form->hidden('Strikes', array( 'value' => '1'));
             		 

             		 ?>
             	&nbsp;
             	<?php echo $this->Form->label('Aceitos os');?> <a href="<?php echo $this->Html->url('/termosDeUsos',true);?>">Termos e Condições </a>	
             
          </div>
          	<button type="submit" class="btn btn-default">Cadastrar</button>
          	<button type="reset" class="btn btn-default">Reset</button>
	 </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
