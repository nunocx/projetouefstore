<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>

	<div>
		<form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
        	<button type="submit" class="btn btn-primary">Buscar</button>
      </form>
    </div>
    
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('Senha'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone1'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_Nascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('Sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('Telefone2'); ?></th>
			<th><?php echo $this->Paginator->sort('Foto'); ?></th>
			<th><?php echo $this->Paginator->sort('Strikes'); ?></th>
			<th><?php echo $this->Paginator->sort('Status'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Email']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['name']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Senha']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Telefone1']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Data_Nascimento']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Sexo']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Telefone2']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Foto']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Strikes']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['Status']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></p>
	<div class="pagination">
    	<ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	</div>

	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Comentarios'), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>