<div class="usuarios view">
<h3><?php echo __('Perfil Usuario: ').h($usuario['Usuario']['name']); ?></h3>
	

 <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Celular:</th>
                                            <th>Telefone:</th>
                                            <th>Sexo:</th>
                                            <th>Reputação:</th>
 											<th>Foto:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="info">
                                            <td><?php echo h($usuario['Usuario']['name']); ?>&nbsp; </td>
                                            <td><?php echo h($usuario['Usuario']['Email']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Telefone1']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Telefone2']); ?>&nbsp;</td>
                                            <td><?php echo h($usuario['Usuario']['Sexo']); ?>&nbsp;</td>
                                            <td><?php echo (h($usuario['Usuario']['VotosPositivos'])+h($usuario['Usuario']['VotosNegativos']))/2; ?></td>
                                        	<td> 
                                        		 <!--- comando para poder ver a IMG -->

		  <?php 
		  	echo $this->Upload->view('Usuario', $usuario['Usuario']['id']);
		  ?>

                                        	&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
  <?php echo 'Suas Fotos';
	echo $this->Upload->view('Usuario', $usuario['Usuario']['id']);

			 ?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
</div>