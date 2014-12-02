<?php

session_start();

require_once "includes/connect_i.php";

$sqlCommand = " SELECT id, name FROM usuarios WHERE Email='". $this->Session->read('Auth.User.Email'). "'";
$query = mysqli_query($myConnection, $sqlCommand) or die  (mysqli_error());

while($row = mysqli_fetch_array($query)){
	$pid = $row["id"];
	$username = $row["name"];
}

mysqli_free_result($query);

$sqlCommand = "SELECT COUNT(id) AS numbers FROM inbox WHERE usuarios_id='$pid'";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
$result = mysqli_fetch_assoc($query);

$inboxMessages = $result['numbers'];
	
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
</table>
<br />
<?php
require_once "includes/connect.php";
$sql = "SELECT * FROM inbox WHERE usuarios_id='$pid' ORDER by id DESC";
$result = mysql_query($sql);
$count = mysql_num_rows($result);

?>
<table width="800" border="0">
	<form name="form1" method="post" action="pm_inbox">
		<tr>
			<td width="41" align="center">#</td>
			<td width="490">Título:</td>
			<td width ="255">De:</td>
		</tr>
		<?php
		while($rows=mysql_fetch_array($result)){
		?>
		<?php if($rows['viewed']== 0){// shows message in blod?>
		<tr>
			<td width="41" align="center"><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $rows['id']; ?>" /></td>
			<td width="490"><a href="pm_view_in?in=<?php echo $rows['id']; ?>"><b><?php echo $rows['title']; ?></b></a></td>
			<td width ="255"><?php echo $this->Html->link(__($rows['from_email']), array('controller' => 'usuarios', 'action' => 'view', $rows['from_id'] )); ?></td>
		</tr>
		<?php } else if($rows['viewed'] == 1){ ?>
		<tr>
			<td width="41" align="center"><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $rows['id']; ?>" /></td>
			<td width="490"><a href="pm_view_in?in=<?php echo $rows['id']; ?>"><?php echo $rows['title']; ?></a></td>
			<td width ="255"><?php echo $this->Html->link(__($rows['from_email']), array('controller' => 'usuarios', 'action' => 'view', $rows['from_id'] )); ?></td>
		</tr>
		<?php } ?>
		<?php } ?>
		<tr>
			<td colspan="3" align="center"><?php if($inboxMessages > 0){ ?><input type="submit" name="delete" id="delete" value="Deletar Mensagem Selecionada" /><?php } else { print "Não há mensagens na sua caixa de entrada"; } ?></td>
		</tr>
		<?php
		if(isset($_POST['delete'])){
		if($_POST['delete']){
			$checkbox = $_POST['checkbox'];
			$delete = $_POST['delete'];
		
			if($delete){
				for($i=0;$i<$count;$i++){
					$del_id = $checkbox[$i];

					$sql = "DELETE FROM inbox WHERE id='$del_id'";
					$result = mysql_query($sql);
				}
					if($result){
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=pm_inbox\">";
					}
				}
				mysql_close();
			}
			else{

			}
		}
		?>
	</form>
	</table>		

</body>
</html>
