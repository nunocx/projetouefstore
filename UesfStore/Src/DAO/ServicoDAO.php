<?php
	
class ServicoDAO        
{

	private $bd;

	    function __construct($bd)
	    {
	        $this->bd = $bd;
	    }

		function inserir($titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
		{
	          $data_Publicacao = date('Y-m-d');
	            $data_Vencimento;
	            $dia = date('d');
	            $mes = date('m');
	            $ano = date('Y'); 
	            // tem que fazer a para de somar 1 mes e tals
	            $data_Vencimento = $ano.'-'.$mes.'-'.$dia;
	        echo '         '.$data_Vencimento;

		    $sql= "INSERT INTO  $this->bd.`servicos`
		     VALUES (NULL ,  '$titulo',  '$descricao',  '$preco','$data_Publicacao',  '$data_Vencimento',  '$fotoVideo',  '0',  '0',  '$aCombinar',  '$idUsuario',  '$categoria');";
	              
	              return $sql;
		}		
		function atualizar($idServico,$titulo,$categoria,$preco,$fotoVideo,$descricao,$idUsuario,$aCombinar)
		{

			$servico = $this->recuperarServico($idServico); 
		  if($servico['id'] == $idServico)
		  {	

		  	$sql = "UPDATE  $this->bd.`servicos`
			SET 
			`name` =  '$titulo',
			`Descricao` =  '$descricao',
			`Preco` =  '$preco',
			`Foto_Video` =  '$fotoVideo',
			`ACombinar` = '$aCombinar',
			`category_id` = '$categoria'
			WHERE 
			`servicos`.`id` = '$idServico' AND `servicos`.`usuario_id`='$idUsuario';";
	            
	            return $sql;
		  }
		  else
		  		return FALSE;
		}
		function recuperarServico($idServico)
		{
			$sql = "SELECT * FROM $this->bd.`servicos`";
			$sql = mysql_query($sql);
			while($ln = mysql_fetch_array($sql))
				if($ln['id'] == $idServico)
					return $ln;

			 return FALSE;
		}
		function buscarServicos($nome)
	    {
	            $nome.='%';
	            
	            $sql = "SELECT * FROM $this->bd.`servicos` WHERE name LIKE '$nome';";

	            $sql = mysql_query($sql);
	            
	            $contador = 0;
	            while ( $servicosEncontrados = mysql_fetch_array($sql) )
	            { 
	                $list[$contador++] = $servicosEncontrados; 
	            }
	            return  $list;
	    }

		function deleta($idServico)
		{
		  $servico = $this->recuperarServico($idServico); 
		  if($servico['id'] == $idServico)
		  {	
	            $sql = "DELETE FROM $this->bd.`servicos` WHERE id = '$idServico';";
	            return $sql;
		  }
		  else
		  	return FALSE;
		}
}

?>

