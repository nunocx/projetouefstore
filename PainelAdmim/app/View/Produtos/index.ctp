<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'gerenciamento',
		'link'	=> '/gerenciamentos'
	),
	array (
		'label' => 'produtos'
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>
<div class="produtos index">
	<h2><?php echo __('Produtos'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
			
			<th><?php echo $this->Paginator->sort('Preco',$title='Preço'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id',$title ='Categoria'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['name']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['Preco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $produto['Produto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $produto['Produto']['id'])); ?>
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
</div>
