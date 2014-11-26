
<h1>Relatório de Produtos</h3><br></br><br></br>
<h4>Digite o intervalo de tempo</h2> 


<form method="get" action="<?php echo $this->Html->url('/gerenciamentos/funcrelatorioproduto', true) ?>">
  De: <input type="date" name="dataInicio"><br>
  Até: <input type="date" name="dataFim"><br>
  <input type="submit" value="Gerar Relatório">
</form>
	
	<div class="row">
		<div class="container">
			<div class="col-lg-1">
				
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

	