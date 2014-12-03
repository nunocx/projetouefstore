<?php $this->requestAction('/gerenciamentos/visao_geral/');
	$this->requestAction('/gerenciamentos/negociacoesSem/');
	$this->requestAction('/gerenciamentos/negociacoesAno/');
 ?>

<div class="Gerenciamento index">
	<h2><?php echo __('UEFStore - Gerar Relatórios'); ?></h2>
	<div area-central>
		<div class="bloco">
			<div class="GCUXF0KCDCB">
				<a href="<?php echo $this->Html->url('/gerenciamentos/relatorios?pg=mes&tipo=negociacao')?>">« Voltar a Visão Geral </a>
					<span class="blogg-title"> Personalizar relatório </span>
			</div>
			<div class="tab">
				<div class="left">
				<?php
					if(isset($_GET['tipo'])) {
						if($_GET['tipo'] == "negociacao") {?>
							<a  class="list active" href="?tipo=negociacao">Negociações</a>
	                		<a  class="gallery" id="listing-gallery-toggle-gallery"  rel="nofollow" href="?tipo=anuncio"> Anúncios </a>
	                		<a  class="gallery" id="listing-gallery-toggle-gallery"  rel="nofollow" href="?tipo=usuario"> Usuário </a>
	                		<div>
	                			<form method="get" action="<?php echo $this->requestAction('/gerenciamentos/gerarnegociacoes')?>">
	                				<p>Do ano de : <input type="number" name="dataInicio"></p>
									<p>Até o ano de : <input type="number" name="dataFim"></p>
									<input type="submit" value="Gerar Relatório">
	                			</form>
	                			<?php}?>
	                		</div>
						<?php
						} else if($_GET['tipo'] == "anuncio") { ?>
							<a class="gallery" id="listing-gallery-toggle-gallery" href="?tipo=negociacao"  rel="nofollow">Negociações</a>
	                		<a   class="list active" href="?tipo=anuncio"> Anúncios </a>
	                		<a class="gallery" id="listing-gallery-toggle-gallery"  href="?tipo=usuario"  rel="nofollow"> Usuários </a>
						<?php	//echo $this->Html->image('relatorios/graficoGeral.png');
						} else if($_GET['tipo'] == "usuario") { ?>
							<a  class="gallery" id="listing-gallery-toggle-gallery"  href="?tipo=negociacao" rel="nofollow">Negociações</a>
	                		<a  class="gallery" id="listing-gallery-toggle-gallery"  href="?tipo=anuncio"  rel="nofollow" > Anúncios </a>
	                		<a class="list active" href="?tipo=usuario" > Usuários </a>
						<?php	//echo $this->Html->image('relatorios/negociacoesAno.png');
						}
					} else { ?>
						<a class="list active" href="?tipo=negociacao"> Negociações </a>
						<a class="gallery" id="listing-gallery-toggle-gallery" href="?tipo=anuncio"  rel="nofollow">Anúncios</a>
	                	<a class="gallery" id="listing-gallery-toggle-gallery"  href="?tipo=usuario"  rel="nofollow"> Usuários </a>
					<?php	//echo $this->Html->image('relatorios/graficoGeral.png');
					}
				?>
				</div>
			</div>
		</div>

		<div class="bloco2">
			<?php
			echo $this->element('menu_painel_adm');
			?>
		</div>
	</div>
</div>