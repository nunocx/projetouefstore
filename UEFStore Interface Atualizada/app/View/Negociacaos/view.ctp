<div class="negociacaos view">
<h2><?php echo __('Negociacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($negociacao['Negociacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($negociacao['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $negociacao['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($negociacao['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $negociacao['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($negociacao['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $negociacao['Servico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interessado'); ?></dt>
		<dd>
			<?php echo h($negociacao['Negociacao']['interessado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Final'); ?></dt>
		<dd>
			<?php echo h($negociacao['Negociacao']['data_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($negociacao['Negociacao']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Negociacao'), array('action' => 'edit', $negociacao['Negociacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Negociacao'), array('action' => 'delete', $negociacao['Negociacao']['id']), array(), __('Are you sure you want to delete # %s?', $negociacao['Negociacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Negociacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Negociacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
