<div class="mensagems index">
	<h3><?php echo __('Mensagem'); ?></h3>
	

<?php


require_once "includes/connect_i.php";
$sqlCommand = "SELECT id, name FROM usuarios WHERE Email='". $this->Session->read('Auth.User.Email'). "'";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
while($row = mysqli_fetch_array($query)){
	$pid = $row["id"];
	$username = $row["name"];
}
mysqli_free_result($query);

$sqlCommand = "SELECT COUNT(id) AS numbers FROM inbox WHERE usuarios_id='$pid' AND viewed='0'";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
$result = mysqli_fetch_assoc($query);

$inboxMessagesNew = $result['numbers'];

$sqlCommand = "SELECT COUNT(id) AS numbers FROM inbox WHERE usuarios_id='$pid'";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
$result = mysqli_fetch_assoc($query);

$inboxMessagesTotal = $result['numbers'];


$sqlCommand = "SELECT COUNT(id) AS numbers FROM outbox WHERE usuarios_id='$pid'";
$query = mysqli_query($myConnection, $sqlCommand) or die (mysqli_error());
$result = mysqli_fetch_assoc($query);

$outboxMessages = $result['numbers'];


?>
<?php if($this->Session->read('Auth.User.Email')) {?>
<?php echo $this->Html->link(__('Caixa de Entrada'), array('action' => 'pm_inbox')); ?> <?php if ($inboxMessagesNew > 0) { print "<b>(".$inboxMessagesNew.")</b>";}
else{ print "(0)";} ?> <?php print $inboxMessagesTotal; ?>, <?php echo $this->Html->link(__('Caixa de Saída'), array('action' => 'pm_outbox')); ?> <?php print $outboxMessages; ?> <?php } else {print "You must be logged in first";}?> 

	
</div>
