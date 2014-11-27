<div class="reports view">
<h3><?php echo __('Denuncia'); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($report['Report']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($report['Report']['Texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($report['Report']['Data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($report['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $report['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($report['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $report['Servico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($report['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $report['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>