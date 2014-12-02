<?php

session_start();

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

if($to_produtos_id!=NULL){
	$sqlCommand = "SELECT name FROM produtos WHERE id='$to_produtos_id' LIMIT 1";
	$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
	while($row = mysqli_fetch_array($query)){
		$TOproduto = $row['name'];
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
<table>
	<tr>
		<td><?php require_once "index.ctp"; ?></td>
	</tr>
</table>
<br />
<table width="800" border="0">
	<form method="post" action="">
		<tr>
			<td width="185">Mandando Para:</td>
			<td width="605"><input name="to_email" type="text" id="to_email" readonly="readonly" value="<?php print $TOuser; ?>" size="40" 
				style="border:hidden" /></td>
			</tr>
		<tr>
			<td width="185"></td>
			<td width="605"><input type="text" name="espaco" id="espcao" size="40" style="border:hidden" readonly></td>
			</tr>
	
		<tr>
			<td width="185">Título:</td>
			<td width="605"><input name="title" type="text" id="title"  value="<?php if($to_produtos_id!=NULL){ echo "[$TOproduto]-"; }?>" size="40" /></td>
			</tr>
		<tr>
			<td width="185"></td>
			<td width="605"><input type="text" name="espaco" id="espcao" size="40" style="border:hidden" readonly></td>
			</tr>
	
		<tr>
			<td width="185">Mensagem:</td>
			<td width="605"><textarea name="message" id="message" cols="42" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit1" id="submit1" value="Mandar mensagem para <?php print $TOuser; ?>" />
					<input name="to_usuarios_id" type="hidden" id="to_usuarios_id" value="<?php print $TOid; ?>"/><input name="usuarios_id" type="hidden" id="usuarios_id" 
					value="<?php print $pid; ?>"/><input name="from_email" type="hidden" id="from_email" value="<?php print $email; ?>"/><input 
					name="senddate" type="hidden" id="senddate" value="<?php echo date("l, jS F Y, g:i:s a"); ?>"/></td>
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
