<!DOCTYPE HTML>
<html>
<?php
	echo $this->element('header');
?>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
						<div class="header_top_right">
						</div>			    
  		    	</div>
  		    <?php
  		    	echo $this->element('nav-top-menu');
  		    ?> 	
	  	     <div class="clear"></div>
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

			<div class="content-bottom-rightt"> 

<!--INICIO Publicidade do boo-box vertical -->
<center>    
<script type="text/javascript">
	bb_bid = "1683374";
	bb_lang = "pt-BR";
	bb_name = "custom";
	bb_limit = "10";
	bb_format = "bbi";
</script>
<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
<!--FINAL Publicidade do boo-box vertical -->

</p>
			
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
			    
			    </div><br><br><br><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0122532760620531"
     data-ad-slot="5487486867"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
			    <!--- END CONTENT -->
			    
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


