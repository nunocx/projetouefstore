<div class="mensagems index">
	<h2><?php echo __('Mensagems'); ?></h2>
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('Texto'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('administrador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Destinatario'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mensagems as $mensagem): ?>
	<tr>
		<td><?php echo h($mensagem['Mensagem']['id']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Assunto']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Texto']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mensagem['Administrador']['name'], array('controller' => 'administradors', 'action' => 'view', $mensagem['Administrador']['id'])); ?>
		</td>
		<td><?php echo h($mensagem['Mensagem']['Destinatario']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mensagem['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $mensagem['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mensagem['Mensagem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mensagem['Mensagem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mensagem['Mensagem']['id']), array(), __('Are you sure you want to delete # %s?', $mensagem['Mensagem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?><br />

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
		<li><?php echo $this->Html->link(__('New Mensagem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
