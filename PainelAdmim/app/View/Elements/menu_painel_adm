<div class="GCUXF0KCCCB GCUXF0KCFCB">
				<div class="GCUXF0KCDCB">
					<span class="blogg-title"> Números do portal </span>
				</div>
				<table cellspacing="0" class="GCUXF0KCGCB" role="presentation">
					<tbody>
						<tr>
							<td>Anúncios cadastrados</td>
							<td class="GCUXF0KCHCB">
								<a class="gwt-Anchor" href="<?php echo $this->Html->url('/gerenciamentos/anuncios/') ?>">
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
								<td>Usuários Ativos</td>
								<td class="GCUXF0KCHCB">
									<?php
									$comando = "SELECT COUNT(*) FROM `usuarios` WHERE `usuarios`.`Strikes` < 3;";
									
									$tam = $this->requestAction('/usuarios/buscaUsuarios/'.$comando);
									?>
									<a class="gwt-Anchor" href="#publishedcomments"><span><?php echo $tam[0][0]['COUNT(*)'] ?></span> »</a>
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