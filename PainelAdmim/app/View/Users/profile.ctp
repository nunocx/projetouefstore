<div class="row">
	<div class="col-sm-12 col-md-5 col-md-offset-3">
		<div class="thumbnail">
			<div class="caption center">
				<h3><?php echo AuthComponent::user('username')?></h3>
				<i class="fa fa-envelope"></i>
				<?php echo AuthComponent::user('email')?>
				<hr/>
			</div>
		</div>
	</div>
</div>