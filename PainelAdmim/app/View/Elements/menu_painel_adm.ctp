<div class="GCUXF0KCCCB GCUXF0KCFCB">
				<div class="GCUXF0KCDCB">
					<span class="blogg-title"> Outros Relatórios </span>
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
									<a class="gwt-Anchor" href="<?php echo $this->Html->url('/gerenciamentos/usuarios/') ?>"><span><?php echo $tam[0][0]['COUNT(*)'] ?></span> »</a>
								</td>
							</tr>
					</tbody>
				</table>
				</div>