<div class="usuarios form">
<?php echo $this->Form->create('Usuario',array('type'=>'file'));
      echo $this->Form->hidden('id');
 ?>
  <fieldset>
    <legend><h3><?php echo __('Atualizar Dados'); ?></h3></legend>
  

    <div class="form-group">
           <?php
              echo $this->Form->input('Email', array('label'=>'E-mail:', 'class'=>'form-control'));?>
               <p class="help-block">Exemplo: name@exemplo.com </p>
        
           <?php echo $this->Form->input('name',array('label'=>'Nome:', 'class'=>'form-control')); 
               echo $this->Form->input('Senha',array('type'=>'password','label'=>'Senha:', 'class'=>'form-control'));
               echo $this->Form->input('Telefone1',array('label'=>'Celular:', 'class'=>'form-control'));  ?>
               <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
            <?php  echo $this->Form->input('Telefone2',array('label'=>'Telefone (opcional):', 'class'=>'form-control')); ?>
               <p class="help-block">Exemplo: (DD) XXXX-XXXX </p>
            <?php
               echo $this->Form->radio('Sexo', array('M'=>'Masculino','F'=>'Feminino'));
            ?>
            <p>
            <?php
             echo $this->Form->label('Foto ');
             echo $this->Form->file('Usuario.Foto'); 
               echo $this->Form->input('Data_Nascimento',
                array( 'label' => 'Data de Nascimento:'
                           , 'dateFormat' => 'DMY'
                           , 'minYear' => date('Y') - 90
                           , 'maxYear' => date('Y') - 0 ));
                ?>
            </p>
                <p>
           <?php 
              //echo $this->Upload->edit('Usuario', $this->Form->fields['Usuario.id']);
            ?>
                  </p>
           
        </div>
          <button type="submit" class="btn btn-default">Alterar</button>
  </fieldset>
<?php echo $this->Form->end(); ?>
</div>