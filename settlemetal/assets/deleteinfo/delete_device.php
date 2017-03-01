<?php
require '../config.php';
$db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)
OR die("Could not connect to MySQL". mysqli_connect_error());
$device_id = $_POST['device_id'];

$sql = "DELETE FROM devices WHERE device_id = $device_id";
if($result = $db->query($sql)){
    echo "Done";
    header('Location:../../admin.php');
}

?>