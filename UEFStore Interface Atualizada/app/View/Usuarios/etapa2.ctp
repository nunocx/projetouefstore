<div class="usuarios form">
<?php echo $this->Form->create('Usuario');
      echo $this->Form->hidden('id');
 ?>
  <fieldset>
    <legend><h3><?php echo __('Adicione uma Foto'); ?></h3>
    		 <?php echo ('Sua foto de perfil'); ?><p></p>
    </legend>
  

    <div class="form-group">
        
                <p>
           <?php 
              echo $this->Upload->edit('Usuario', $this->Form->fields['Usuario.id']);
            ?>
                  </p>
           
        </div>
          <button type="submit" class="btn btn-default">Finalizar</button>
  </fieldset>
<?php echo $this->Form->end(); ?>
</div>