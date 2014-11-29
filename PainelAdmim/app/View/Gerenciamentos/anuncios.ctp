
<div class="Gerenciamento index">
	<h2><?php echo __('UEFStore - Anúncios'); ?></h2>
	<div area-central>
		<div class="bloco">
			<div class="GCUXF0KCDCB">
				<a href="<?php echo $this->Html->url('/gerenciamentos/relatorios')?>">« Voltar a Visão Geral </a>
				<span class="blogg-title"> Anúncios </span>
			</div>
			<?php echo $this->Html->image('relatorios/ultimosanuncios.png')?>
		</div>

		<div class="bloco2">
			<div class="GCUXF0KCCCB GCUXF0KCFCB">
				<div class="GCUXF0KCDCB">
					<span class="blogg-title"> Números do portal </span>
				</div>
				<table cellspacing="0" class="GCUXF0KCGCB" role="presentation">
					<tbody>
						<tr>
							<td>Anúncios cadastrados</td>
							<td class="GCUXF0KCHCB">
								<a class="gwt-Anchor" href="#">
									<?php
									$comando = "SELECT COUNT(*) FROM `produtos`;";
									$comando2 = "SELECT COUNT(*) FROM `servicos`;";
									
									$tam = $this->requestAction('/produtos/buscaProdutos/'.$comando);
									$tam2 = $this->requestAction('/servicos/buscaServicos/'.$comando2);
									?>
									<span><?php echo $tam[0][0]['COUNT(*)']+$tam2[0][0]['COUNT(*)'] ?></span> »</a>
								</td>
							</tr>
							<tr>
								<td>Comentários publicados</td>
								<td class="GCUXF0KCHCB">
									<a class="gwt-Anchor" href="#publishedcomments"><span>15</span> »</a>
								</td>
							</tr>
							<tr>
								<td>Visualizações de página de hoje</td>
								<td class="GCUXF0KCHCB">
									<a class="gwt-Anchor" href="#overviewstats"><span>77</span> »</a>
								</td>
							</tr><tr>
							<td>Postagens</td>
							<td class="GCUXF0KCHCB"> <a class="gwt-Anchor" href="#allposts"><span>19</span> »</a>
							</td>
						</tr>
						<tr>
							<td>Seguidores</td>
							<td class="GCUXF0KCHCB"> <span>0</span> <a class="gwt-Anchor" href="javascript:" aria-hidden="true" style="display: none;"><span>0</span> »</a>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
		</div>
	</div>
</div>