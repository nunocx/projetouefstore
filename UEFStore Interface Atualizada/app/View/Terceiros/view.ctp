<div class="terceiros view">
<h2><?php echo __('Terceiro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NomeEmpresa'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['NomeEmpresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['Imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ValorPago'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['ValorPago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($terceiro['Category']['name'], array('controller' => 'categories', 'action' => 'view', $terceiro['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataInicio'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['DataInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($terceiro['Terceiro']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($terceiro['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $terceiro['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Terceiro'), array('action' => 'edit', $terceiro['Terceiro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terceiro'), array('action' => 'delete', $terceiro['Terceiro']['id']), array(), __('Are you sure you want to delete # %s?', $terceiro['Terceiro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terceiros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terceiro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
