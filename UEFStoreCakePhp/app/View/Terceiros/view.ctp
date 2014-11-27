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