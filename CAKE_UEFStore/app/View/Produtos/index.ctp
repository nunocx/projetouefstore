<!-- File: /app/View/Posts/index.ctp  (links para edição adicionados) -->

<h1>Produto</h1>

<p><?php echo $this->Html->link("Cadastro de Produtos", array('action' => 'add')); ?></p>


<table>
    <tr>
        <th>id</th>
        <th>Titulo:</th>
        <th>Descrição :</th>
        <th>Preco :</th>
        <th>Coluna3 :</th>
    
            </tr>

                    <?php foreach ($produto as $produtos): ?>

            <tr>         
            <td>
                    <?php echo $produtos['Produto']['IdProduto']; ?>
            </td>
            <td>            
                    <?php echo $this->Html->link($produtos['Produto']['Nome'],
                    array('action' => 'view', $produtos['Produto']['IdProduto']));?>
            </td>
            <td> 
                    <?php echo $produtos['Produto']['Descricao']; ?>
            </td>     
            <td> 
                    <?php echo $produtos['Produto']['Preco']; ?>
            </td> 
            <td> 
                    linha 3
            </td> 
    </tr> 


<?php endforeach; ?>

</table>