<?php
    //Se conectando com o Banco de dados "Servidor" "UserName", "Senha", "Banco de dados"
    $con = mysql_connect("localhost" , "Administrador", "", "ScriptBancoDeDadosAtualizado").
    
            $listagem = mysqli_query($con, "SELECT * FROM produtos" );
    
    //Biblioteca
    require 'fpdf/fpdf.php';
    
    // Função para converter caracteres E DEIXAR COM ACENTOS
    function converte ($string){
    return iconv ("UTF-8", "ISO-8859-1", $string);
}
  $pdf = new FPDF("P", "pt", "A4")  ; //criando PDF
  $pdf-> AddPage();
  $pdf->Ln(30);
  
  $pdf->SetFont ("arial","B", 18);
  $pdf->Cell (0,5,converte ("Relatório"),0, 1,C); //centralizado
  $pdf->Ln(20);
  
  $pdf->SetFont("arial","S",14);
  $pdf-> Cell (20, 20, converte ("Descrição"), 1, 0, "L");
  $pdf->Cell (60, 20, converte("preço"), 1,1,"L");
  
  
 
  $pdf->SetFont ("arial", "", 12);
  while ($linha = mysql_fetch_array($listagem)){
        $pdf-> Cell (20, 20, $linha ("id"), 1, 0, "L");
        $pdf-> Cell (29)
            
  $pdf->Output ("relatorio.pdf", "I");
          
  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>