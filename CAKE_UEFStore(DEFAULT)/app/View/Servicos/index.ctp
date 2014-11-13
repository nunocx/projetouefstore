<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>serviços</h1>

<p><?php echo $this->Html->link("Cadastro de Serviços", array('action' => 'add')); ?></p>


<table>
    <tr>
        <th>Id:</th>
        <th>Titulo:</th>
        <th>Preço :</th>
        <th>Descrição :</th>
        <th>Vendedor :</th>
    
            </tr>

                    <?php foreach ($servico as $servicos): ?>

            <tr>         
            <td>
                    <?php echo $servicos['Servico']['IdServico']; ?>
            </td>
            <td>            
                    <?php echo $this->Html->link($servicos['Servico']['Nome'],
                    array('action' => 'view', $servicos['Servico']['IdServico']));?>
            </td>
            <td> 
                    <?php echo $servicos['Servico']['Preco']; ?>
            </td>     
            <td> 
                     <?php echo $servicos['Servico']['Descricao']; ?>
            </td> 
            <td> 
                     <?php echo $servicos['Servico']['Usuario_Email']; ?>
            </td> 
    </tr> 


<?php endforeach; ?>

</table>