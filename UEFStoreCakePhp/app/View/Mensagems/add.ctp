<div class="mensagems form">
<?php echo $this->Form->create('Mensagem'); ?>
	<fieldset>
		<h3><?php echo __('Mandar Mensagem'); ?></h3>
	<?php
		echo $this->Form->input('Assunto',array('class'=>'form-control'));
		echo $this->Form->input('Texto',array('class'=>'form-control','rows'=>'4'));
		echo $this->Form->hidden('Data');
		echo $this->Form->hidden('Destinatario');
		echo $this->Form->hidden('Emisor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('enviar')); ?>
</div>
<div class="col span_1_of_3">
					<div class="contact_info"></br>
    	 				<h3>Nossa localização</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3899.6818779884265!2d-38.96962200000001!3d-12.202035999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x714384295e0790f%3A0x6e9b7e439a929e1a!2sUniversidade+Estadual+de+Feira+de+Santana!5e0!3m2!1sen!2sin!4v1417140527914" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small></iframe>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Informações sobre a empresa :</h3>
						<p>Endereço: <span>Avenida Transnordestina, s/n - Novo Horizonte - Feira de Santana - BA.</span></p>
				   		<p>Telefone:<span>(75) 3623-0001</span></p>
				 	 	<p>Email: <span>sac@uefstore.url.ph</span></p>
				   </div>
				 </div>
