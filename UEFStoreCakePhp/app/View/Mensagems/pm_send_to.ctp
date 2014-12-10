<div class="mensagems index">
	<h3><?php echo __('Mensagem'); ?></h3>
	

<?php

date_default_timezone_set('America/Bahia');

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

require_once "includes/connect_i.php";

$sqlCommand = "SELECT id, name FROM usuarios WHERE Email='". $this->Session->read('Auth.User.Email'). "'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error());

while($row = mysqli_fetch_array($query)){
	$pid = $row["id"];
	$email = $row["name"];
}

mysqli_free_result($query);
$to_usuarios_id = $idUser;
$to_produtos_id = $idProduct;
$to_servicos_id = $idServico;

if($to_produtos_id!=NULL){
	$sqlCommand = "SELECT name FROM produtos WHERE id='$to_produtos_id' LIMIT 1";
	$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
	while($row = mysqli_fetch_array($query)){
		$TOproduto = $row['name'];
	}
	mysqli_free_result($query);

}

if($to_servicos_id!=NULL){
	$sqlCommand = "SELECT name FROM servicos WHERE id='$to_servicos_id' LIMIT 1";
	$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
	while($row = mysqli_fetch_array($query)){
		$TOservico = $row['name'];
	}
	mysqli_free_result($query);

}



$sqlCommand = "SELECT id, name FROM usuarios WHERE id='$to_usuarios_id' LIMIT 1";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
while($row = mysqli_fetch_array($query)){
	$TOid = $row['id'];
	$TOuser = $row['name'];
}
mysqli_free_result($query);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org./1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf=8" />
<title>Untitled Document</title>
</head>

<body>
<table width="675" border="0">
	<tr>
		<td align="center"><?php require_once "index.ctp"; ?></td>
	</tr>
</table>
<br />
<table width="700" border="0">
	<form method="post" action="">
		<tr height="30">
			<td width="185">Enviando Para:</td>
			<td width="605"><input name="to_email" type="text" id="to_email" readonly="readonly" value="<?php print $TOuser; ?>" size="40" 
				style="border:hidden" /></td>
			</tr>
		<tr height="30">
			<td width="185">Título:</td>
			<td width="605"><input name="title" type="text"  maxlength="60" id="title"  value="<?php if($to_produtos_id!=NULL){ echo "[$TOproduto] - "; }else if($to_servicos_id!=NULL){ echo "[$TOservico] - ";}?>" size="40" /></td>
			</tr>
		<tr>
			<td width="185">Mensagem:</td>
		</tr>
		<tr>
			<td></td>
			<td width="605"><textarea name="message" id="message" cols="60" rows="10"></textarea></td>
			</tr>
			<tr height="25"></tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit1" id="submit1" value="Enviar mensagem para <?php print $TOuser; ?>" />
					<input name="to_usuarios_id" type="hidden" id="to_usuarios_id" value="<?php print $TOid; ?>"/><input name="usuarios_id" type="hidden" id="usuarios_id" 
					value="<?php print $pid; ?>"/><input name="from_email" type="hidden" id="from_email" value="<?php print $email; ?>"/><input 
					name="senddate" type="hidden" id="senddate" value="<?php $horario = strftime('%A, %d de %B de %Y, %H:%M:%S'); echo $horario; ?>"/></td>
				</tr>
				<?php
				if(isset($_POST['submit1'])){
				if($_POST['submit1']){
					$to_email = $_POST['to_email'];
					$title = $_POST['title'];
					$message = $_POST['message'];
					$to_usuarios_id = $_POST['to_usuarios_id'];
					$usuarios_id = $_POST['usuarios_id'];
					$from_email = $_POST['from_email'];
					$senddate = $_POST['senddate'];

					if($title!=NULL && $message!=NULL){
					
					require_once "includes/connect_i.php";
					$query = mysqli_query($myConnection, "INSERT INTO outbox(usuarios_id, email, to_usuarios_id, to_email, title, content, senddate)VALUES('$usuarios_id','$from_email','$to_usuarios_id','$to_email','$title','$message', '$senddate')") or die (mysqli_error($myConnection));
					$query = mysqli_query($myConnection, "INSERT INTO inbox(usuarios_id, email, from_id, from_email, title, content, recieve_date)VALUES('$to_usuarios_id','$to_email','$usuarios_id','$from_email','$title','$message', '$senddate')") or die (mysqli_error($myConnection));
					
					
 					header ("Location: http://localhost/projetouefstore/UEFStoreCakePhp/mensagems/message");//mudar para url do site
					
					exit();

			    } else if($title==NULL){
			    	echo "                          DIGITE UM TÌTULO PARA SUA MENSAGEM!!!";
			    }
			    else{
			    	echo "                          DIGITE UM CORPO PARA SUA MENSAGEM!!!!";
			    }
				}
			}
				?>
			</form>
				</table>


</body>
</html>

</div>
