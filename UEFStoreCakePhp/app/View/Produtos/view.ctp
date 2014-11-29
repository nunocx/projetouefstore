<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Preview :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="../text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="../text/javascript" src="js/move-top.js"></script>
<script type="../text/javascript" src="js/easing.js"></script>
<script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="../css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
 
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<h3><?php echo strtoupper($produto['Produto']['name'])?></h3>
    		
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<?php //foreach ($produtos as $produto): ?>
									<a href="#" target="_blank"><img src="img/<?php echo $produto['Produto']['id']; ?>.jpg" alt=" " /></a>
									<?php
		// esse comando puxa as imagens da pasta files/produtos/id/Imagens todas...  e mostra  mesma forma pra serviço e usuario  
			echo $this->Upload->view('Produto', $produto['Produto']['id']);?>
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/thumbnailslide-1.jpg" alt=" " /></a></li> <?php//Esses img src são os img das imagens na view de produto?>
									<li><a href="#"><img src="images/thumbnailslide-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-3.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-4.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-5.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/thumbnailslide-6.jpg" alt=" " /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="desc span_3_of_2">
					
									
					<div class="price">
						<p>Publicado em: <?php echo ($produto['Produto']['Data_Publicacao']); ?></p>
						<p>Preço: <span>R$<?php echo $produto['Produto']['Preco']?></span></p>
						<p>Categoria: <?php echo $this->Html->link($produto['Category']['name'], array('controller' => 'categories', 'action' => 'view', $produto['Category']['id'])); ?></p>
						<p>Vendedor: <?php echo $this->Html->link($produto['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $produto['Usuario']['id'])); ?></p>

						<div class="button"><a href="#">Negociar</a></div>	
					</div>
					
				<div class="share-desc">
									
					<div class="clear"></div>
				</div>
				 
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Descrição do Produto</li>

					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<li><?php echo $produto['Produto']['Descricao']?></li>
					</div>

			
			</div>
		 </div>
	 </div>
	    
<div class="related">
	<h3><?php echo __('Comentários'); ?></h3>
	<?php if (!empty($produto['Comentario'])): ?>
		<table class="table table-bordered table-hover table-striped">

	<?php foreach ($produto['Comentario'] as $comentario): ?>
		<tr>
			<td><?php echo $comentario['usuario_id']; ?></td>
			<td><?php echo $comentario['Data']; ?></td>
			<td><?php echo $comentario['Texto']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario'), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>

