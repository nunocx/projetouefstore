<div class="category form">
<?php echo $this->Form->create('Category');
		echo $this->Form->hidden('id');
 ?>
	<fieldset>
		<legend><h3><?php echo __('Editar Categoria'); ?></h3></legend>
	<div class="form-group">
	<?php
		echo $this->Form->input('name',array('label'=>'Nome', 'class'=>'form-control'));
	?>
	</div>
		<button type="submit" class="btn btn-default">Alterar</button>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
