<div class="usuarios index">
	<h3><?php echo __('Negociações'); ?></h3>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
		<tr>
				topo da tabela
		</tr>
		</thead>

		<tbody>
			
			<br />corpo
		</tbody>

	</table>

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros no  total {:count}, começando no registro {:start}, terminando no {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
