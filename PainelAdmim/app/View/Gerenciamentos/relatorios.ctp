
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
				<button type="button" class="btn btn-primary"> Gerar Relatórios Gerais</button><br />
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

	<div>
			<table class="table table-bordered">
	<thead>
	<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Data Cadastro</th>
			<th>Preco</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($resultados as $resultado): ?>
	<tr>
		<td><?php echo h($resultado['produtos']['id']); ?>&nbsp;</td>
		<td><?php echo h($resultado['produtos']['name']); ?>&nbsp;</td>
		<td><?php echo h($resultado['produtos']['Data_Publicacao']); ?>&nbsp;</td>
		<td><?php echo h($resultado['produtos']['Preco']); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	
</div>
