	<?php
		$atual = (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;
			$pagArquivo = array_chunk($usuarios, 20);
			$contar = count($pagArquivo);
			$resultado = $pagArquivo[$atual-1];
		//debug($resultado) or die();
	?>

	<div class="usuarios index">
	<h2><?php echo __('Usuários'); ?></h2>

		<div>
			<form method="get" action="<?php echo $this->Html->url('/usuarios/search', true)?>" style="margin-left: -15px;" class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" name="termo" class="form-control" placeholder="Sua Busca">
		        </div>
	        	<button type="submit" class="btn btn-primary">Buscar</button>
	      </form>
	    </div>
	<?php if($resultado != NULL) {?>
		<table class="table table-bordered">
		<thead>
		<tr>
				<th>Cod</th>
				<th>E-mail</th>
				<th>Nome</th>
				<th>Status</th>
				<th class="actions"><?php echo __('Ações'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($resultado as $valor): ?>
		<tr>
			<td><?php echo $valor['usuarios']['id']; ?>&nbsp;</td>
			<td><?php echo $valor['usuarios']['Email']; ?>&nbsp;</td>
			<td><?php echo $valor['usuarios']['name']; ?>&nbsp;</td>
			<td><?php echo $valor['usuarios']['id']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $valor['usuarios']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $valor['usuarios']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

		<!-- Paginação -->
	<p>
	<ul class="paginacao">
		<?php 
		for($i = 1; $i < $contar; $i++){
			if($i == $atual) { ?>
					<li><a class="ativo" href="#"><?php echo $i ?></a></li>
		<?php 	} else { ?>
					<li><a href="?pg=<?php echo $i; ?>&termo=<?php echo $_GET['termo']; ?>"> <?php echo $i ?> </a></li>
		<?php	}
		} ?>
	</ul>
	</p>
		<!-- Fim Paginação -->

	<?php } else { ?>
				<br /><br /><hr />
				<p>Nenhum resultado encontrado.</p>
			<?php } ?>