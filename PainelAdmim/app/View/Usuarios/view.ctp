<?php
$breadcrumb = array(
	array(
		'label' => 'Home',
		'link'	=> '/'
	),array (
		'label' => 'Busca usuarios',
		'link'	=> '/usuarios'
	),
	array (
		'label' => 'Vizualizar usuario'
	)
);

echo $this->element('breadcrumb',array('links' => $breadcrumb));

?>

<div class="usuarios view">
<h3><?php echo __('Usuario:&nbsp;&nbsp;&nbsp;'. $usuario['Usuario']['name']); ?></h3>
	<dl>

		<dt><?php echo __('Email: '.$usuario['Usuario']['Email']); ?></dt>
		<dt><?php echo __('Senha: '.$usuario['Usuario']['Senha']); ?></dt>
		<dt><?php echo __('Telefone: '.$usuario['Usuario']['Telefone1']); ?></dt>
		<dt><?php echo __('Telefone: '.$usuario['Usuario']['Telefone2']); ?></dt>
		<dt><?php echo __('Data Nascimento: '.$usuario['Usuario']['Data_Nascimento']); ?></dt>
		<dt><?php echo __('Sexo: '.$usuario['Usuario']['Sexo']); ?></dt>
		<dt><?php echo __('Strikes: '.$usuario['Usuario']['Strikes']); ?></dt>
		<dt><?php echo __('Reputação: '.($usuario['Usuario']['VotosPositivos']+$usuario['Usuario']['VotosNegativos'])/2 ); ?></dt>
		<?php if( $usuario['Usuario']['regra']  == 3)
				$regra = 'Bloqueado';
			else
				$regra = 'Usuario';
		?>
		<dt><?php echo __('Regra: '.$regra ); ?></dt>
	</dl>

	<?php echo $this->Html->link(__('Editar Usuario'),'/usuarios/edit/'. $usuario['Usuario']['id'],array('class' => 'btn btn-default pull-left','style' => 'margin-top: 15px')) ?>
	<br/>
	<br/>
	<br/>
	
</div>


<div class="related">
	<h3><?php echo __('Negocições'); ?></h3>
	<?php if (!empty($usuario['Negociacao'])): ?>
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Usuario'); ?></th>
			<th><?php echo __('Produto'); ?></th>
			<th><?php echo __('Servico'); ?></th>
			<th><?php echo __('Interessado Id'); ?></th>
			<th><?php echo __('Data Final'); ?></th>
			<th><?php echo __('Status'); ?></th>
		</tr>
		<?php foreach ($usuario['Negociacao'] as $negociacao): ?>
			<tr>
				<td><?php echo $negociacao['usuario_id']; ?></td>
				<td><?php echo $negociacao['produto_id']; ?></td>
				<td><?php echo $negociacao['servico_id']; ?></td>
				<td><?php echo $negociacao['interessado']; ?></td>
				<td><?php echo $negociacao['data_final']; ?></td>
				<td><?php echo $negociacao['status']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php else:
			echo'Não há negociações';
	endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Produtos'); ?></h3>
	<?php if (!empty($usuario['Produto'])): ?>
	<table class="table table-bordered">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('Quantidade'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($usuario['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['name']; ?></td>
			<td><?php echo $produto['Preco']; ?></td>
			<td><?php echo $produto['Quantidade']; ?></td>
			<td><?php echo $usuario['Usuario']['name']; ?></td>
			<td><?php echo $produto['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else:
			echo'Não há Produtos';
			endif; ?>

</div>

<div class="related">
	<h3><?php echo __('Serviços'); ?></h3>
	<?php if (!empty($usuario['Servico'])): ?>
	<table class="table table-bordered">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('A Combinar'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($usuario['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['name']; ?></td>
			<td><?php echo $servico['Preco']; ?></td>
			<td>
			<?php 
				if ($servico['ACombinar'] ==1)
					echo 'Sim';
				else
					echo 'Não';?>
			</td>
			<td><?php echo $usuario['Usuario']['name']; ?></td>
			<td><?php echo $servico['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else:
			echo'Não há Serviços';
			endif; ?>

</div>
