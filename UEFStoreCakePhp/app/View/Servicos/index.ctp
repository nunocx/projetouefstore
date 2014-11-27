<div class="servicos index">
	<h3><?php echo __('Servicos'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name',$title='Titulo'); ?></th>
			
			<th><?php echo $this->Paginator->sort('Preco'); ?></th>
			<th><?php echo $this->Paginator->sort('A Combinar'); ?></th>

			<th><?php 
					echo $this->Paginator->sort('usuario_id'); 

			?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($servicos as $servico): ?>
	<tr>
		<td><?php echo h($servico['Servico']['name']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['Preco']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['ACombinar']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id'])); ?>
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