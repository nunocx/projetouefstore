<div class="servico form">
<?php echo $this->Form->create('Produto');
      echo $this->Form->hidden('id');
 ?>
  <fieldset>
    <legend><h3><?php echo __('Estapa 2 Adicione Foto '); ?></h3>
    		 <?php echo ('Segunda Etapa'); ?><p></p>
    </legend>
  

    <div class="form-group">
        
                <p>
           <?php 
              echo $this->Upload->edit('Produto', $this->Form->fields['Produto.id']);
            ?>
                  </p>
           
        </div>
          <button type="submit" class="btn btn-default">Finalizar</button>
  </fieldset>
<?php echo $this->Form->end(); ?>
</div>