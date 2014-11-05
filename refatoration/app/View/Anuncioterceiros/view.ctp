<div class="anuncioterceiros view">
<h3><?php echo __('Anuncio Terceiro'); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['NomeEmpresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['Imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pago'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['ValorPago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicio'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['DataInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($anuncioterceiro['Anuncioterceiro']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anuncioterceiro['Category']['name'], array('controller' => 'categories', 'action' => 'view', $anuncioterceiro['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anuncioterceiro['Administrador']['name'], array('controller' => 'administradors', 'action' => 'view', $anuncioterceiro['Administrador']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anuncioterceiro'), array('action' => 'edit', $anuncioterceiro['Anuncioterceiro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anuncioterceiro'), array('action' => 'delete', $anuncioterceiro['Anuncioterceiro']['id']), array(), __('Are you sure you want to delete # %s?', $anuncioterceiro['Anuncioterceiro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('controller' => 'administradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('controller' => 'administradors', 'action' => 'add')); ?> </li>
	</ul>
</div>
