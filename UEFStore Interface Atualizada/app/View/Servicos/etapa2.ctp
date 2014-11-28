<div class="servico form">
<?php echo $this->Form->create('Servico');
      echo $this->Form->hidden('id');
 ?>
  <fieldset>
    <legend><h3><?php echo __('Estapa 2 Adicione Foto '); ?></h3>
    		 <?php echo ('Segunda Etapa'); ?><p></p>
    </legend>
  

    <div class="form-group">
        
                <p>
           <?php 
              echo $this->Upload->edit('Servico', $this->Form->fields['Servico.id']);
            ?>
                  </p>
           
        </div>
          <button type="submit" class="btn btn-default">Finalizar</button>
  </fieldset>
<?php echo $this->Form->end(); ?>
</div>