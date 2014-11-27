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