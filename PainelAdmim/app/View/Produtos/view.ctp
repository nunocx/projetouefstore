<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Publicacao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Data_Publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Data_Vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Video'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Foto_Video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expirado'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['Expirado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CondicaoUso'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['CondicaoUso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>