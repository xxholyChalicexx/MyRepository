<?php
$device = intval($_POST['device']);
require '../config.php';
$dbc = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());

$sql = "SELECT model_id,model_name FROM models WHERE device=? ";
if($stmt112 = $dbc->prepare($sql))
{
  $stmt112->bind_param('i',$device);
  $stmt112->execute();
  $stmt112->bind_result($model_id, $model_name);
  $stmt112->store_result();
  echo "<option value='' >--Models--</option>";
  while ($stmt112->fetch()) {
  echo "<option value='".$model_id."'>".$model_name."</option>";
  }
  $stmt112->close();
}

?>
