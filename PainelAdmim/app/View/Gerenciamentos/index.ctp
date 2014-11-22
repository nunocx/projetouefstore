
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
				<button type="button" class="btn btn-danger"> Gerar Relatórios Gerais</button><br />
				<p></p>
				<button type="button" class="btn btn-danger"> Gerar Relatórios Usuarios</button><br />
				<p></p>
				<button type="button" class="btn btn-danger"> Gerar Relatórios Anuncios</button><br />
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
				<?php echo $this->Html->link(__('Lista Produtos '),'/produtos',array('class' => 'btn btn-info')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Lista Serviços '),'/servicos',array('class' => 'btn btn-info')) ?>

			</div>
			<div class="col-lg-3">
				<h3>Executar Manutenções</h3>
				<p></p>
				<?php echo $this->Html->link(__('Update Datas Produtos'),'/produtos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Update Datas Serviços'),'/produtos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Update Datas Negociações'),'/produtos',array('class' => 'btn btn-warning')) ?>
				<p></p>
				<?php echo $this->Html->link(__('Update Status Usuarios '),'/produtos',array('class' => 'btn btn-warning')) ?>
				

			</div>

		</div>
	</div>
	
</div>
