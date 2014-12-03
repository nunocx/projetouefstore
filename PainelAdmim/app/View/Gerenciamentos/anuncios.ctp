<?php $this->requestAction('/gerenciamentos/anuncios/');
	$this->requestAction('/gerenciamentos/anunciosSem/');
	$this->requestAction('/gerenciamentos/anunciosAno/');
	$this->requestAction('/gerenciamentos/anuciosProdutosServicos/');
 ?>
<div class="Gerenciamento index">
	<h2><?php echo __('UEFStore - Anúncios'); ?></h2>
	<div area-central>
		<div class="bloco">
			<div class="GCUXF0KCDCB">
				<a href="<?php echo $this->Html->url('/gerenciamentos/relatorios?pg=mes')?>">« Voltar a Visão Geral </a>
				<span class="blogg-title"> Anúncios </span>
			</div>

		<div class="tab">
				<div class="left">
				<?php
					if(isset($_GET['pg'])) {
						if($_GET['pg'] == "sem") {?>
							<a class="list active" href="?pg=sem">Semana</a>
	                		<a class="gallery" id="listing-gallery-toggle-gallery"  rel="nofollow" href="?pg=mes"> Mês </a>
	                		<a class="gallery" id="listing-gallery-toggle-gallery"  rel="nofollow" href="?pg=ano"> Ano </a>
						<?php	echo $this->Html->image('relatorios/anunciosSem.png');
						} else if($_GET['pg'] == "mes") { ?>
							<a class="gallery" id="listing-gallery-toggle-gallery" href="?pg=sem"  rel="nofollow">Semana</a>
	                		<a   class="list active" href="?pg=mes"> Mês </a>
	                		<a class="gallery" id="listing-gallery-toggle-gallery"  href="?pg=ano"  rel="nofollow"> Ano </a>
						<?php	echo $this->Html->image('relatorios/ultimosanuncios.png');
						} else if($_GET['pg'] == "ano") { ?>
							<a  class="gallery" id="listing-gallery-toggle-gallery"  href="?pg=sem" rel="nofollow">Semana</a>
	                		<a  class="gallery" id="listing-gallery-toggle-gallery"  href="?pg=mes"  rel="nofollow" > Mês </a>
	                		<a class="list active" href="?pg=ano" > Ano </a>
						<?php	echo $this->Html->image('relatorios/anunciosAno.png');
						}
					} else { ?>
						<a class="gallery" id="listing-gallery-toggle-gallery" href="?pg=sem"  rel="nofollow">Semana</a>
	                		<a   class="list active" href="?pg=mes"> Mês </a>
	                		<a class="gallery" id="listing-gallery-toggle-gallery"  href="?pg=ano"  rel="nofollow"> Ano </a>
					<?php	echo $this->Html->image('relatorios/ultimosanuncios.png');
					}
				?>
				</div>
			</div>
		</br></br>
			<span class="blogg-subtitle">Produtos e Seviços</span>
			</br>
			<?php	echo $this->Html->image('relatorios/produtosServicos.png');
					echo $this->Html->image('relatorios/legenda.png');
			?>
		</div>
		<div class="bloco2">
			<?php
			echo $this->element('menu_painel_adm');
			?>
		</div>
	</div>
</div>