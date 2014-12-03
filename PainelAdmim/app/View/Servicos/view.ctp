<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'gerenciamento',
		'link'	=> '/gerenciamentos'
	),
	array (
		'label' => 'serviços',
		'link'	=> '/servicos'
	),
	array (
		'label' => $servico['Servico']['name']
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>]
<div class="servico view">
<h2><?php echo __('Serviço'); ?></h2>
	<dl>
		<dt><?php echo __('Id &nbsp;'.$servico['Servico']['id']); ?></dt>
		
		<dt><?php echo __('Nome&nbsp;'.$servico['Servico']['name']); ?></dt>
		
		<dt><?php echo __('Descrição&nbsp;'.$servico['Servico']['Descricao']); ?></dt>
		
		<dt><?php echo __('Preço&nbsp;'.$servico['Servico']['Preco']); ?></dt>
	
		<dt><?php echo __('Data Publicação&nbsp;'.$servico['Servico']['Data_Publicacao']); ?></dt>
		
		<dt><?php echo __('Data Vencimento&nbsp;'.$servico['Servico']['Data_Vencimento']); ?></dt>
		
		<dt><?php
		if($servico['Servico']['ACombinar']==1)
			$x='sim';
		else
			$x='não';
		echo __('Valor a combinar&nbsp;'.$x); ?></dt>
		
		<dt><?php echo __('Bloqueado&nbsp;'.$servico['Servico']['Bloqueado']); ?></dt>
		
		<dt><?php echo __('Expirado&nbsp;'.$servico['Servico']['Expirado']); ?></dt>
		
		<dt><?php echo __('Usuario&nbsp;'.$this->Html->link($servico['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $servico['Usuario']['id']))); ?></dt>
		
		<dt><?php echo __('Categoria&nbsp;'.$this->Html->link($servico['Category']['name'], array('controller' => 'categories', 'action' => 'view', $servico['Category']['id']))); ?></dt>
	</dl>
</div>