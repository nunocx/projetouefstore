
<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'mensagens',
		'link'	=> '/mensagems'
	),array (
		'label' => $mensagem['Mensagem']['Assunto']
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>

<div class="mensagems view">
<h2><?php echo __('Mensagem'); ?></h2>

	<div class="alert alert-warning">
		
		<h4 class="alert-heading"></h4>
		<dl>
			<h3><dt><?php echo __('Assunto: '.$mensagem['Mensagem']['Assunto'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>Data: '.$mensagem['Mensagem']['Data'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;['.'Cod '.$mensagem['Mensagem']['id'].']</h4>'); ?></dt></h3>
		
			<dt><?php echo __('<h4>Enviado por: '.$mensagem['Mensagem']['Emisor'].'</h4>'); ?></dt>
			
			<dt><?php echo __('<h3>Texto</h3>'); ?></dt>
			<dd>
			
				<?php echo '<h4>'.$mensagem['Mensagem']['Texto'].'</h4>' ; ?>
				&nbsp;
			</dd>
			
			
		</dl>
	</div>
</div>