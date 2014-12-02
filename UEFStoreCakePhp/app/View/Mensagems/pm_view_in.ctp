<?php

session_start();

require_once "includes/connect_i.php";

if(!$_GET['in']){
	$pageid2 = '1';
} else {
	$pageid2 = ereg_replace("[^0-9]","",$_GET['in']);
}

$sqlCommand = " SELECT id, name FROM usuarios WHERE Email='". $this->Session->read('Auth.User.Email'). "'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error());

while($row = mysqli_fetch_array($query)){
	$pid = $row["id"];
	$username = $row["name"];
}

mysqli_free_result($query);
$sqlCommand = " SELECT id, usuarios_id, from_id, from_email, title, content, recieve_date FROM inbox WHERE id='$pageid2' AND usuarios_id='$pid'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error($myConnection));

while($row = mysqli_fetch_array($query)){
	$Hid = $row["id"];
	$Huserid = $row["usuarios_id"];
	$Hfrom_id = $row["from_id"];
	$Hfrom_username = $row["from_email"];
	$Htitle = $row["title"];
	$Hcontent = $row["content"];
	$Hrecievedate = $row["recieve_date"];
}

mysqli_free_result($query);

$query = mysqli_query($myConnection, "UPDATE inbox SET viewed='1' WHERE id='$pageid2'") or die (mysqli_error($myConnection));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org./1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf=8" />
<title>Untitled Document</title>
</head>

<body>
<table width="800" border="0">
	<tr>
		<td><?php require_once "index.ctp"; ?></td>
	</tr>
</table><br />

<table width="800" border="0">
	<td width="185">Assunto:</td>
	<td width="605"><input type="text" name="from_username" id="from_username" size="60" value="<?php print $Htitle; ?>"  readonly="readonly" style="border:hidden"></td>
</tr>
<tr>
			<td width="185"></td>
			<td width="605"><input type="text" name="espaco" id="espcao" size="40" style="border:hidden" readonly></td>
			</tr>

<tr>
	<td>De:</td>
	<td><input type="text" name="from_username" id="from_username" size="60" value="<?php print $Hfrom_username; ?>" style="border:hidden" readonly></td>
	</tr>
	<tr>
			<td width="185"></td>
			<td width="605"><input type="text" name="espaco" id="espcao" size="40" style="border:hidden" readonly></td>
			</tr>
	
<tr>

<tr>
	<td>Data recebida:</td>
	<td><?php print $Hrecievedate; ?></td>
	</tr>
	<tr>
			<td width="185"></td>
			<td width="605"><input type="text" name="espaco" id="espcao" size="40" style="border:hidden" readonly></td>
			</tr>
	
	<tr>
	<td valign="top">Corpo da Mensagem</td>
	<td width="605">
		<form><textarea name="content"  id="content"  cols="42" rows="10"
				readonly>
<?php print $Hcontent; ?>
</textarea>
</form>
			</td>
</tr>
</table>
</body>
</html>
