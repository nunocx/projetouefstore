<div class="negociacaos index">
	<h2><?php echo __('Negociacaos'); ?></h2>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('interessado'); ?></th>
			<th><?php echo $this->Paginator->sort('data_final'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($negociacaos as $negociacao): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($negociacao['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $negociacao['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($negociacao['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $negociacao['Produto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($negociacao['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $negociacao['Servico']['id'])); ?>
		</td>
		<td><?php echo h($negociacao['Negociacao']['interessado']); ?>&nbsp;</td>
		<td><?php echo h($negociacao['Negociacao']['data_final']); ?>&nbsp;</td>
		<td><?php echo h($negociacao['Negociacao']['status']); ?>&nbsp;</td>
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