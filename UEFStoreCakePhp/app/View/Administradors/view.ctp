<div class="administradors view">
<h3><?php echo __('Perfil: '.($administrador['Administrador']['name'])); ?></h3>

<!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Celular</th>
                                            <th>Telefone</th>
                                            <th>Data de Nascimento</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="info">
                                            <td><?php echo h($administrador['Administrador']['name']); ?>&nbsp; </td>
                                            <td><?php echo h($administrador['Administrador']['Email']); ?>&nbsp;</td>
                                            <td><?php echo h($administrador['Administrador']['Telefone1']); ?>&nbsp;</td>
                                            <td><?php echo h($administrador['Administrador']['Telefone2']); ?>&nbsp;</td>
                                            <td><?php echo h($administrador['Administrador']['Data_Nascimento']); ?>&nbsp;</td>
                                            <td><?php echo (h($administrador['Administrador']['Foto'])); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrador'), array('action' => 'edit', $administrador['Administrador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrador'), array('action' => 'delete', $administrador['Administrador']['id']), array(), __('Are you sure you want to delete # %s?', $administrador['Administrador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Administradors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncioterceiros'), array('controller' => 'anuncioterceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncioterceiro'), array('controller' => 'anuncioterceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensagems'), array('controller' => 'mensagems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensagem'), array('controller' => 'mensagems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Anuncioterceiros'); ?></h3>
	<?php if (!empty($administrador['Anuncioterceiro'])): ?>
	<table class="table table-bordered table-hover table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Nome Empresa'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th><?php echo __('Valor Pago'); ?></th>
		<th><?php echo __('Data Inicio'); ?></th>
		<th><?php echo __('Administrador Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrador['Anuncioterceiro'] as $anuncioterceiro): ?>
		<tr>
			<td><?php echo $anuncioterceiro['id']; ?></td>
			<td><?php echo $anuncioterceiro['name']; ?></td>
			<td><?php echo $anuncioterceiro['NomeEmpresa']; ?></td>
			<td><?php echo $anuncioterceiro['Imagem']; ?></td>
			<td><?php echo $anuncioterceiro['ValorPago']; ?></td>
			<td><?php echo $anuncioterceiro['DataInicio']; ?></td>
			<td><?php echo $anuncioterceiro['administrador_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'anuncioterceiros', 'action' => 'view', $anuncioterceiro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'anuncioterceiros', 'action' => 'edit', $anuncioterceiro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'anuncioterceiros', 'action' => 'delete', $anuncioterceiro['id']), array(), __('Are you sure you want to delete # %s?', $anuncioterceiro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>