<div class="reports view">
<h2><?php echo __('Report'); ?></h2>
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
			<?php echo $this->Html->link($report['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $report['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($report['Servico']['id'], array('controller' => 'servicos', 'action' => 'view', $report['Servico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($report['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $report['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Report'), array('action' => 'edit', $report['Report']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Report'), array('action' => 'delete', $report['Report']['id']), array(), __('Are you sure you want to delete # %s?', $report['Report']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
