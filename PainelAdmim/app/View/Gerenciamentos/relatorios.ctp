<?php $this->requestAction('/gerenciamentos/visao_geral/'); ?>

<div class="Gerenciamento index">
	<h2><?php echo __('UEFStore - Visão Geral'); ?></h2>
	<div area-central>
		<div class="bloco">
			<div class="GCUXF0KCDCB">
					<span class="blogg-title"> Negociações no mês </span>
					<a href="<?php echo $this->Html->url('/gerenciamentos/negociacoes/') ?>">Mais estatísticas »</a>
				</div>
			<?php echo $this->Html->image('relatorios/graficoGeral.png')?>
		</div>

		<div class="bloco2">
			<?php
			echo $this->element('menu_painel_adm');
			?>
		</div>
	</div>
</div>