<div class="servicos index">
	<h2><?php echo __('Servicos'); ?></h2>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name',$title='Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('Preco',$title='Preço'); ?></th>
			<th><?php echo $this->Paginator->sort('ACombinar',$title='A Combinar'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id',$title='Categoria'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($servicos as $servico): ?>
	<tr>
		<td><?php echo h($servico['Servico']['name']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Preco']); ?>&nbsp;</td>
		<td><?php 
		if($servico['Servico']['ACombinar']==1)
		$status = 'Sim';
		else
		$status = 'Não';
		echo h( $status); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $servico['Servico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $servico['Servico']['id'])); ?>
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