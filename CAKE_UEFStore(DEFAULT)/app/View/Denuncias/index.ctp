<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>Usuarios</h1>

<p><?php echo $this->Html->link("Cadastro de Usuario", array('action' => 'add')); ?></p>


<table>
    <tr>
        <th>E-mail:</th>
        <th>Nome:</th>
        <th>Coluna :</th>
        <th>Coluna2 :</th>
        <th>Coluna3 :</th>
    
            </tr>

                    <?php foreach ($usuario as $usuarios): ?>

            <tr>         
            <td>
                    <?php echo $usuarios['Usuario']['Email']; ?>
            </td>
            <td>            
                    <?php echo $this->Html->link($usuarios['Usuario']['Nome'],
                    array('action' => 'view', $usuarios['Usuario']['Email']));?>
            </td>
            <td> 
                    linha 
            </td>     
            <td> 
                    linha 2
            </td> 
            <td> 
                    linha 3
            </td> 
    </tr> 


<?php endforeach; ?>

</table>