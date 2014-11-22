<div class="mensagems view">
<h2><?php echo __('Mensagem'); ?></h2>

	<div class="alert alert-info">
		
		<h4 class="alert-heading"></h4>
		<dl>
			<dt><?php echo __('Assunto: '.$mensagem['Mensagem']['Assunto'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data: '.$mensagem['Mensagem']['Data'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;['.'Cod '.$mensagem['Mensagem']['id'].']'); ?></dt>
			<dt><?php echo __('Texto'); ?></dt>
			<dd>
			
				<?php echo h($mensagem['Mensagem']['Texto']); ?>
				&nbsp;
			</dd>
			
			<dt><?php echo __('Enviado por: '.$mensagem['Mensagem']['Emisor']); ?></dt>
		</dl>
	</div>
</div>