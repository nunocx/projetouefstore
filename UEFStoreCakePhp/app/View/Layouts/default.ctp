<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
	echo $this->element('header');
?>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
						<div class="header_top_right">
						</div>
			     <div class="clear"></div>
  		    </div>     
  		    <!--- MENU PRINCIPAL-->
  		    <?php
  		    	echo $this->element('nav-top-menu');
  		    ?>
  		     

			   <div class="slider-text">

	  	       </div>
	  	       <div class="slider-img">
	  	      	
	  	       </div>
	  	     <div class="clear"></div>
	      </div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
      <div class="content">
    	        <!--
    	        Anuncio em Destaque
	    	        -->
	    	    

    	  <div class="content_bottom">
    	    <div class="wrap">

<div class="content-bottom-rightt"><h2>Anuncios Terceirizados
</h2> <br /> <center><img border="0" alt="an˙ncio 1" src="http://uuuiiii.zip.net/ArrumaBlog.gif" title="An˙ncio 1" <br /> <br /> <br />
<br /> <center><img border="0" alt="an˙ncio 2" src="http://uuuiiii.zip.net/ArrumaBlog.gif" title="An˙ncio 2" <br /> <br /> <br />
</p>
</div>

    	    	<div class="content-bottom-left">
    	    		<!--- Categorias -->
    	    		<?php echo $this->element('navbar-side-left')?>
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<!-- Anuncio em GERAL -->
    	    	<div class="Content">
    	    	
		             <?php echo $this->Session->flash(); ?>
                     <?php echo $this->fetch('content'); ?>
			    
			    </div>
			    <!--- END CONTENT -->
			    <div class="product-articles">
			      <h3></h3>
			      <ul>
			      <li>
			       <div class="article">
			      	<p><span>Voc√™ j√° pode se cadastrar</span></p>
			      	<p>Criamos um formul√°rio simples e eficiente onde voc√™ usu√°rio pode se cadastrar de forma r√°pida e segura.</p>
			      	<p><a href="#"></a></p>
			      </div>
			      </li>
			      </ul>
			    </div>
		      </div>
		      <div class="clear"></div>
		   </div>
         </div>
      </div>
    </div>
  <!--- Footer -->
		<?php echo $this->element('footer');?>

</body>
</html>


