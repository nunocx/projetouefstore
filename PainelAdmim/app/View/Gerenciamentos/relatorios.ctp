
<?php
$breadcrumb = array(
	array(
		'label' => 'Home',
		'link'	=> '/'
	),array (
		'label' => 'Relatorios'
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>

<div class="Gerenciamento index">
	<h2><?php echo __('Relatorios do Portal'); ?></h2>

	<div class="row">
		<div class="container">
			<div class="col-lg-3">
				<h3>Relatórios</h3>
			<a href="<?php echo $this->Html->url('relatorioproduto') ?>" class="btn btn-danger"> Gerar Relatórios Gerais</a><br />		
				<p></p>
				<button type="button" class="btn btn-primary"> Gerar Relatórios Usuarios</button><br />
				<p></p>
				<button type="button" class="btn btn-primary"> Gerar Relatórios Anuncios</button><br />
			</div>
			<div class="col-lg-3">
			</div>
			<div class="col-lg-3">
			
			</div>
			<div class="col-lg-3"></div>

		</div>
	</div>

</div>
