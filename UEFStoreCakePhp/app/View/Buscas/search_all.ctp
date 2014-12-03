	<?php
		$atual = (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;
		$termo = $_GET['termo'];
		if($atual != 1) {
			$produtos = $this->requestAction('/produtos/search/'.$termo);
			$servicos = $this->requestAction('/servicos/search/'.$termo);
		}
			$pagArquivo = array_chunk($produtos, 10);
			$pagArquivo2 = array_chunk($servicos, 10);
			if(count($pagArquivo) > count($pagArquivo2)){
				$contar = count($pagArquivo);
			} else {
				$contar = count($pagArquivo2);
			}
			//$contar = count($pagArquivo)+count($pagArquivo2);
			$resultado = $pagArquivo[$atual-1];
			$resultado2 = $pagArquivo2[$atual-1];
			?>

	<?php if($resultado != NULL OR $resultado2 != NULL) {?>
		<!-- Exibição dos resultados -->
		<?php if(count($resultado) > count($resultado2)){
					$contador = count($resultado);
				} else {
					$contador = count($resultado2);
				}?>
			<div class="section group">
				<h3>Resultado da busca</h3>
				<!--<div class="tab">
					<div class="left">
						<a class="gallery active" href="#"> Fotos Maiores </a>
						<a class="list" href="<?php// echo $this->Html->url('/produtos/searchview/'.$_GET['termo']) ?>" >Exibição em Lista</a>
					</div>
				</div>-->

		<?php for($j = 0; $j < $contador; $j++) {
				$arrayTemp = $resultado[$j];
				$arrayTemp2 = $resultado2[$j];

						if($arrayTemp != NULL) { ?>

							<div class="grid_1_of_4 images_1_of_4">
								<h4><a href="<?php echo $this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>">
								<?php echo $arrayTemp['produtos']['name']?>
								</a></h4>
								<a href="<?php echo $this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>"></a>
								<?php  echo $this->Html->image( $arrayTemp['produtos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
								 <div class="price-details">
							       <div class="price-number">
										<p><span class="rupees">R$<?php echo $arrayTemp['produtos']['Preco']?></span></p>
								    </div>
								       		<div class="add-cart">								
												<h4>

												<a href="
												<?php 
												echo 
													$this->Html->url('/produtos/view/'.$arrayTemp['produtos']['id']); ?>">Mais Informações</a>
												</h4>
										     </div>
										<div class="clear"></div>
								</div>
						    </div>


						<?php }
						if($arrayTemp2 != NULL) { ?>
							
							<div class="grid_1_of_4 images_1_of_4">
								<h4><a href="<?php echo $this->Html->url('/servicos/view/'.$arrayTemp2['servicos']['id']); ?>">
								<?php echo $arrayTemp2['servicos']['name']?>
								</a></h4>
								<a href="<?php echo $this->Html->url('/servicos/view/'.$arrayTemp2['servicos']['id']); ?>"></a>
								<?php  echo $this->Html->image( $arrayTemp2['servicos']['Foto_Video'],array('width'=>'120px','height'=>'120px'))?>
								 <div class="price-details">
							       <div class="price-number">
										<p><span class="rupees">R$ <?php echo $arrayTemp2['servicos']['Preco']?></span></p>
								    </div>
								       		<div class="add-cart">								
												<h4>
												<a href="<?php echo $this->Html->url('/servicos/view/'.$arrayTemp2['servicos']['id']); ?>">Mais Informações</a>
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
			<?php 	} else { ?>
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