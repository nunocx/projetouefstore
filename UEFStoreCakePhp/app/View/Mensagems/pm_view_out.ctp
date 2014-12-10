<div class="mensagems index">
	<h3><?php echo __('Mensagem'); ?></h3>

<?php

require_once "includes/connect_i.php";

if(!$_GET['out']){
	$pageid = '1';
} else {
	$pageid = ereg_replace("[^0-9]","",$_GET['out']);
}

$sqlCommand = " SELECT id, name FROM usuarios WHERE Email='". $this->Session->read('Auth.User.Email'). "'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error());

while($row = mysqli_fetch_array($query)){
	$pid = $row["id"];
	$username = $row["name"];
}

mysqli_free_result($query);
$sqlCommand = " SELECT id, usuarios_id, to_usuarios_id, to_email, title, content, senddate FROM outbox WHERE id='$pageid' AND usuarios_id='$pid'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error());

while($row = mysqli_fetch_array($query)){
	$Hid = $row["id"];
	$Huserid = $row["usuarios_id"];
	$Hfrom_id = $row["to_usuarios_id"];
	$Hfrom_username = $row["to_email"];
	$Htitle = $row["title"];
	$Hcontent = $row["content"];
	$Hrecievedate = $row["senddate"];
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
</table><br />

<table width="700" border="0">
<tr height="30">
	<td width="185">Título:</td>
	<td width="605"><input type="text" name="from_username" id="from_username" size="40" value="<?php print $Htitle; ?>"  readonly="readonly" style="border:hidden"></td>
</tr>

<tr height="30">
	<td>Para:</td>
	<td><input type="text" name="from_username" id="from_username" size="40" value="<?php print $Hfrom_username; ?>" style="border:hidden" readonly></td>
</tr>
<tr height="40">
	<td>Data Enviada:</td>
	<td><?php print $Hrecievedate; ?></td>
</tr>
<tr>
	<td valign="top">Mensagem:</td>
 </tr>
<tr>
	<td></td>
	<td width="605">
		<form><textarea name="content"  id="content"  cols="60" rows="10"
				readonly>
<?php print $Hcontent; ?>
</textarea>
</form>
			</td>
</tr>
</table>
</body>
</html>

</div>