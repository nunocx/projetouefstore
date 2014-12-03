
<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'mensagens'
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>
<div class="mensagems index">
	<h2><?php echo __('Mensagens'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('Emisor'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mensagems as $mensagem): ?>
	<tr>
		<td><?php echo h($mensagem['Mensagem']['Assunto']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Data']); ?>&nbsp;</td>
		<td><?php echo h($mensagem['Mensagem']['Emisor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mensagem['Mensagem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $mensagem['Mensagem']['id']), array(), __('Você deseja deletar esta menssagem?')); ?>
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
