<?php	
$categories = $this->requestAction('categories/indexView');
?>
<div class="categories">
	<ul>
	<h3>Categorias</h3>
		<?php  foreach ($categories as $category): ?>
		<li><a href="<?php echo $this->Html->url('/categories/view/'.$category['Category']['id']); ?>"><?php echo $category['Category']['name'];?></a></li>
		<?php  endforeach; ?>
	</ul>
</div>			

				 