<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>Usuarios</h1>

<p><?php echo $this->Html->link("Cadastro de Usuario", array('action' => 'add')); ?></p>


<table>
    <tr>
        <th>E-mail:</th>
        <th>Nome:</th>
        <th>Telefone :</th>
        <th>Data Nascimento :</th>
        <th>Foto :</th>
        <th>Reputação :</th>
    
            </tr>

                    <?php foreach ($usuario as $usuarios): ?>

            <tr>         
            <td>
                    <?php echo $usuarios['Usuario']['Email']; ?>
            </td>
            <td>            
                    <?php echo $this->Html->link($usuarios['Usuario']['Nome'],
                    array('action' => 'view', $usuarios['Usuario']['Nome']));?>
            </td>
            <td> 
                    <?php echo $usuarios['Usuario']['Telefone1']; ?>
            </td>     
            <td> 
                    <?php echo $usuarios['Usuario']['Data_Nascimento']; ?>
            </td> 
            <td> 
                   <?php echo $usuarios['Usuario']['Foto']; ?>
            </td> 
            <td> 
                    <?php echo $usuarios['Usuario']['Status']; ?>
            </td> 
    </tr> 


<?php endforeach; ?>

</table>