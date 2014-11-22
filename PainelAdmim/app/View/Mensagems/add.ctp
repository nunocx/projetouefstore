	<?php
	$breadcrumb = array(
		array(
			'label' => 'Home',
			'link'	=> '/'
		),array (
			'label' => 'Mensagem',
			'link'	=> '/mensagems'
		),array (
			'label' => 'Enviar Menssagens'
			
		)
	);
	echo $this->element('breadcrumb',array('links' => $breadcrumb));
	?>

<div class="mensagems form">
<?php echo $this->Form->create('Mensagem'); ?>
	<fieldset>
		<legend><?php echo __('Mandar Mensagem'); ?></legend>
	<?php
		echo $this->Form->input('Assunto');
		echo $this->Form->input('Texto',array('rows'=>'4'));
		echo $this->Form->hidden('Data');
		echo $this->Form->input('Destinatario');
		echo $this->Form->input('Emisor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('enviar')); ?>
</div>