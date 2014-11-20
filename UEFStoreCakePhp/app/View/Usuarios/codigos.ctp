<div class="usuarios form">
<?php echo $this->Form->create('Usuario');
      echo $this->Form->hidden('id');
 ?>
  <fieldset>
    <legend><h3><?php echo __('Estapa 2 Adicione uma foto '); ?></h3></legend>
  

    <div class="form-group">
        
                <p>
           <?php 
              echo $this->Upload->edit('Usuario', $this->Form->fields['Usuario.id']);
            ?>
                  </p>
           
        </div>
          <button type="submit" class="btn btn-default">Terminar</button>
  </fieldset>
<?php echo $this->Form->end(); ?>
</div>


  <div class="related">
  <h3><?php echo __('Related Comentarios'); ?></h3>
  <?php if (!empty($usuario['Comentario'])): ?>
  <table class="table table-bordered table-hover table-striped">
  <tr>
    <th><?php echo __('Usuario Id'); ?></th>
    <th><?php echo __('Servico Id'); ?></th>
    <th><?php echo __('Produto Id'); ?></th>
  </tr>
  <?php foreach ($usuario['Comentario'] as $comentario): ?>
    <tr>
      <td><?php echo $comentario['usuario_id']; ?></td>
      <td><?php echo $comentario['servico_id']; ?></td>
      <td><?php echo $comentario['produto_id']; ?></td>
      
    </tr>
  <?php endforeach; ?>
  </table>
<?php endif; ?>

    <div class="actions">
      <ul>
      <li><?php echo $this->Html->link(__('Você pode comentar Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
      </ul>
    </div>
  </div>
</div>
if ($this->Produto->save($this->request->data)) {
        $this->Session->setFlash('Dados do produto salvo com sucesso.');
        $id_produto = $this->Produto->id;
        $this->redirect(array('controller'=>'produtos','action' => 'editar/'.$id_produto));
      }
$this->loadModel ( 'Turma' );
    $this->set ( 'turmas', $this->Turma->find ( 'all', array (
        'order' => 'id ASC'
    ) ) );

    <?php
                      
                      foreach ( $turmas as $turma ) :
                        $opt_turmas [$turma['Turma'] ['id']] = $turma['Turma'] ['turma'];
                      endforeach
                      ;
                      echo $this->Form->input ( 'turma_id', array (
                          'class' => 'form-control',
                          'type' => 'select',
                          'label' => 'Turma: ',
                          'options' => array (
                              $opt_turmas 
                          ) 
                      ) );
                      ?>
                      $this->request->data ['Boleto'] ['boleto_matricula'];