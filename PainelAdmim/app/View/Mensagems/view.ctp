<div class="mensagems view">
<h2><?php echo __('Mensagem'); ?></h2>

	<div class="alert alert-info">
		
		<h4 class="alert-heading"></h4>
		<dl>
			<dt><?php echo __('Código: '.$mensagem['Mensagem']['id']); ?></dt>
			<dt><?php echo __('Assunto: '.$mensagem['Mensagem']['Assunto']); ?></dt>
			<dt><?php echo __('Corpo'); ?></dt>
			<dd>
			
				<?php echo h($mensagem['Mensagem']['Texto']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Data: '.$mensagem['Mensagem']['Data']); ?></dt>
			<dt><?php echo __('Emisor: '.$mensagem['Mensagem']['Emisor']); ?></dt>
		</dl>
	</div>
</div>