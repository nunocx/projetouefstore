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
		'label' => 'produtos',
		'link'	=> '/produtos'
	),
	array (
		'label' => $produto['Produto']['name']
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>
<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id &nbsp;'.$produto['Produto']['id']); ?></dt>
		
		<dt><?php echo __('Nome&nbsp;'.$produto['Produto']['name']); ?></dt>
		
		<dt><?php echo __('Descrição&nbsp;'.$produto['Produto']['Descricao']); ?></dt>
		
		<dt><?php echo __('Preço&nbsp;'.$produto['Produto']['Preco']); ?></dt>
	
		<dt><?php echo __('Data Publicação&nbsp;'.$produto['Produto']['Data_Publicacao']); ?></dt>
		
		<dt><?php echo __('Data Vencimento&nbsp;'.$produto['Produto']['Data_Vencimento']); ?></dt>
		
		<dt><?php echo __('Quantidade&nbsp;'.$produto['Produto']['Quantidade']); ?></dt>
		
		
		<dt><?php echo __('Bloqueado&nbsp;'.$produto['Produto']['Bloqueado']); ?></dt>
		
		<dt><?php echo __('Expirado&nbsp;'.$produto['Produto']['Expirado']); ?></dt>
		
		<dt><?php echo __('Usuario&nbsp;'.$this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id']))); ?></dt>
		
		<dt><?php echo __('Categoria&nbsp;'.$this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id']))); ?></dt>
	</dl>
</div>