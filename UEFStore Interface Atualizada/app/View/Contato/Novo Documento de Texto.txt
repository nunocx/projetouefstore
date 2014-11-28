				<h3>Entre em contato conosco</h3>
				<?php
				
				



if (true)    /* display the contact form */ 
    { 
    ?>
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Nome:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    E-mail:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Mensagem:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Enviar"/> 
    </form> 
    <?php 
    }
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "Todos os campos são necessários, por favor preencha <a href=\"\">o formulário</a> novamente."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Mensagem do formulário de contato UEFStore"; 
        mail("youremail@yoursite.com", $subject, $message, $from); 
        echo $name;
        echo "Email enviado! Entraremos em contato o mais rápido possível."; 
        } 
    }   
?>
				  
				<div class="col span_1_of_3">
					<div class="contact_info"></br>
    	 				<h3>Nossa localização</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3899.6818779884265!2d-38.96962200000001!3d-12.202035999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714384295e0790f%3A0x6e9b7e439a929e1a!2sUniversidade+Estadual+de+Feira+de+Santana!5e0!3m2!1sen!2sin!4v1417140527914" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small></iframe>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Informações sobre a empresa :</h3>
						    	<p>Endereço: Avenida Transnordestina, </p>
						   		<p>s/n - Novo Horizonte,</p>
						   		<p>Feira de Santana - BA,</p>
				   		<p>Phone:(75) 3623 0001</p>
				 	 	<p>Email: <span>contato@uefstore.com</span></p>
				   </div>
				 </div>
			  