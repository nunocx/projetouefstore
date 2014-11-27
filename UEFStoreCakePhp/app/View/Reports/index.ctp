<div class="reports index">
	<h3><?php echo __('Denuncias'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Texto'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reports as $report): ?>
	<tr>
		<td><?php echo h($report['Report']['Texto']); ?>&nbsp;</td>
		<td><?php echo h($report['Report']['Data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($report['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $report['Produto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($report['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $report['Servico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($report['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $report['Usuario']['id'])); ?>
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