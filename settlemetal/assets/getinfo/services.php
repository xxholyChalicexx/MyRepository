<?php
$model = intval($_POST['models']);

require '../config.php';
$dbc = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());

$sql = "SELECT service_id,service_name FROM services WHERE model_id=? ";
$stmt112 = $dbc->prepare($sql);
$stmt112->bind_param('i',$model);
$stmt112->execute();
$stmt112->bind_result($service_id, $service_name);
$stmt112->store_result();
while ($stmt112->fetch()) {
echo "<div class='col-md-4 col-sm-4'>
        <label class='alert alert-info'><input type='checkbox' name='service[]'  value='".$service_id."'>&nbsp;".$service_name."</label>
      </div>";
}
$stmt112->close();

?>
