<div class="categories index">
	<h2><?php echo __('Categorias'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id',$title='Cod'); ?></th>
			<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array(), __('Você deseja deletar esta Categoria: # %s?', $category['Category']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
<p><?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, começando no registro {:start}, terminando no {:end}')
	));
	?></p>
	<div class="pagination">
    	<ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('Antes'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('Depois'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	</div>