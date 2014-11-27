<div class="comentarios view">
<h3><?php echo __('Comentario'); ?></h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['Data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['Texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $comentario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Servico']['name'], array('controller' => 'servicos', 'action' => 'view', $comentario['Servico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $comentario['Produto']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>