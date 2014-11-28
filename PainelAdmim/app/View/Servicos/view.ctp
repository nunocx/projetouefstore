<div class="servicos view">
<h2><?php echo __('Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Publicacao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Data_Publicacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Data_Vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Video'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Foto_Video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expirado'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['Expirado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ACombinar'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['ACombinar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>