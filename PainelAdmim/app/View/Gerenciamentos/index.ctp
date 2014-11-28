
<?php
$breadcrumb = array(
	array(
		'label' => 'Home',
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
				<a href="<?php echo $this->Html->url('relatorios') ?>" class="btn btn-danger"> Ir para Relatórios Gerais</a><br />
				<p></p>
				
			</div>
			<div class="col-lg-3">
				<h3>Usuários</h3>
				<?php echo $this->Html->link(__(' Buscar Usuarios'),'/usuarios',array('class' => 'btn btn-primary')) ?>
				<p></p>
				<?php echo $this->Html->link(__(' Enviar Mensagem'),'/mensagems/add/',array('class' => 'btn btn-primary')) ?>
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
				<?php echo $this->Html->link(__('Checar validade Produtos'),'/produtos/attStatusProdutos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Checar validade Serviços'),'/produtos/attStatusServicos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Checar validade Negociações'),'/produtos/attStatusNeg',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Checar validade Usuarios'),'/produtos/attStatusUsuarios',array('class' => 'btn btn-warning')) ?>
				

			</div>

		</div>
	</div>
	
</div>
