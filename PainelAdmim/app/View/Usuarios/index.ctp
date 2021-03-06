
<?php
$breadcrumb = array(
	array(
		'label' => 'home',
		'link'	=> '/'
	),array (
		'label' => 'busca usuarios'
	)
);
echo $this->element('breadcrumb',array('links' => $breadcrumb));
?>
<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>

		<div>
			<form method="get" action="<?php echo $this->Html->url('/usuarios/search', true)?>" style="margin-left: -15px;" class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" name="termo" class="form-control" placeholder="Sua busca">
		        </div>
	        	<button type="submit" class="btn btn-primary">Buscar</button>
	      </form>
	    </div>

	<table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Email',$title ='E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('name',$title ='Nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['Email']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p><?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, começando no registro {:start}, terminando no {:end}')
	));
	?></p>
	<div class="pagination">
    	<ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('Antes'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('Depois'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	</div>