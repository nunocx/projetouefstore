
<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'gerenciamento'
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>
<div class="Gerenciamento index">
	<h2><?php echo __('Gerenciamento - Portal UEFStore'); ?></h2>

		<div class="row">
		<div class="container">
			<div class="col-lg-3">
				<h3>Relatórios</h3>
				<a href="<?php echo $this->Html->url('relatorios?pg=mes&tipo=negociacao') ?>" class="btn btn-danger"> Relatórios</a><br />
				<p></p>
				
			</div>
			<div class="col-lg-3">
				<h3>Usuários</h3>
				<?php echo $this->Html->link(__(' Buscar Usuarios'),'/usuarios',array('class' => 'btn btn-primary')) ?>
				<p></p>
				<?php //echo $this->Html->link(__(' Enviar Mensagem'),'/mensagems/add/',array('class' => 'btn btn-primary')) ?>
			</div>
			<div class="col-lg-3">
				<h3>Anuncios</h3>
				<p></p>
				<?php echo $this->Html->link(__('Listar Produtos '),'/produtos',array('class' => 'btn btn-info')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Listar Serviços '),'/servicos',array('class' => 'btn btn-info')) ?>

			</div>
			<div class="col-lg-3">
				<h3>Manutenções do Portal</h3>
				<p></p>
				<?php echo $this->Html->link(__('Bloquear Produtos Expirados'),'/produtos/attStatusProdutos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Bloquear Serviços Expirados'),'/produtos/attStatusServicos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Liberar Negociações Expiradas'),'/produtos/attStatusNeg',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php //echo $this->Html->link(__('Checar validade Usuarios'),'/produtos/attStatusUsuarios',array('class' => 'btn btn-warning')) ?>
				

			</div>

		</div>
	</div>
	
</div>
