<div class="row">
	<div class="col-lg-12">
		<h1>Bem-Vindo <small>Portal Gerenciamento UEFStore</small></h1>
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Você pode acessar as funcionalidades por esta pagina ou acessando pela barra lateral.
		</div>
	</div>
</div><!-- /.row -->

<div class="row">
	<div class="col-lg-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading"><?php echo $users_count?></p>
						<p class="announcement-text"> Admins </p>
					</div>
				</div>
			</div>
			<a href="<?php echo $this->params->webroot?>users">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Ver Lista
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-check fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">2</p>
						<p class="announcement-text">Gerenciamento</p>
					</div>
				</div>
			</div>
			<a href="<?php echo $this->Html->url('/gerenciamentos');?>">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Gerenciar
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">3</p>
						<p class="announcement-text">Relatórios</p>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Relatórios		
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-6">
						<i class="fa fa-comments fa-5x"></i>
					</div>
					<div class="col-xs-6 text-right">
						<p class="announcement-heading">4</p>
						<p class="announcement-text">Menssagens</p>
					</div>
				</div>
			</div>
			<a href="<?php echo $this->Html->url('/mensagems');?>">
				<div class="panel-footer announcement-bottom">
					<div class="row">
						<div class="col-xs-6">
							Menssagens
						</div>
						<div class="col-xs-6 text-right">
							<i class="fa fa-arrow-circle-right"></i>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</div><!-- /.row -->
