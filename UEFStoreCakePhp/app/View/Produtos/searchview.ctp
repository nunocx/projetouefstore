	<?php
		$atual = (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;
			$pagArquivo = array_chunk($produtos, 10);
			$contar = count($pagArquivo);
			$resultado = $pagArquivo[$atual-1];
			?>

	<?php if($resultado != NULL) {
		/* Exibição dos resultados */
					$contador = count($resultado);?>
			<div class="section group">
				<h3>Resultado da busca de produtos</h3>
				<div class="tab">
					<div class="left">
						<a class="list" href="#"> Fotos Maiores </a>
						<a class="gallery active" href="#" >Buscar Produtos</a>
					</div>
				</div>

		<?php for($j = 0; $j < $contador; $j++) {
				$arrayTemp = $resultado[$j];

						if($arrayTemp != NULL) { ?>

							<div class="grid_1_of_4 images_1_of_4">
								<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>">
								<?php echo $arrayTemp['produtos']['name']?>
								</a></h4>
								<a href="<?php echo $this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>"></a>
								<?php echo $this->Html->image($arrayTemp['produtos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
								 <div class="price-details">
							       <div class="price-number">
										<p><span class="rupees">R$<?php echo $arrayTemp['produtos']['Preco']?></span></p>
								    </div>
								       		<div class="add-cart">								
												<h4>
												<a href="<?php echo $this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>">Mais Info</a>
												</h4>
										     </div>
										<div class="clear"></div>
								</div>
						    </div>


						<?php }
				}?>
			</div>

		<!-- Paginação -->
		<br /><br />
	<p>
	<ul class="paginacao">
		<?php 
			for($i = 1; $i < $contar; $i++){
				if($i == $atual) { ?>
						<li><a class="ativo" href="#"><?php echo $i ?></a></li>
			<?php 	} else {
						if(){
							
						}?>
						<li><a href="?pg=<?php echo $i; ?>&termo=<?php echo $_GET['termo']; ?>"><?php echo $i ?> </a></li>
			<?php	}
			}?>
	</ul>
	</p>
		<!-- Fim Paginação -->

	<?php } else { ?>
				<br /><br /><hr />
				<p>Nenhum resultado encontrado.</p>
			<?php } ?>