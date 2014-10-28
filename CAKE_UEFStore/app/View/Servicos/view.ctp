<table>
    <tr>
        <th>Id:</th>
        <th>Titulo:</th>
        <th>Preço :</th>
        <th>Descrição :</th>
        <th>Vendedor :</th>
    
            </tr>
            <tr>         
            <td>
                   <p> <?php echo $servico['Servico']['IdServico']; ?></p>
            </td>
            <td>            
                   <p> <?php echo $servico['Servico']['Nome'];?></p>
            </td>
            <td> 
                   <p> <?php echo $servico['Servico']['Preco']; ?></p>
            </td>     
            <td> 
                    <p> <?php echo $servico['Servico']['Descricao']; ?></p>
            </td> 
            <td> 
                    <p> <?php echo $servico['Servico']['Usuario_Email']; ?></p>
            </td> 
    </tr> 