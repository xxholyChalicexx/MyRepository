<?php
require '../config.php';
$db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)
OR die("Could not connect to MySQL". mysqli_connect_error());
$service_id = $_POST['service_id'];

$sql = "DELETE FROM services WHERE service_id = $service_id";
if($result = $db->query($sql)){
    echo "Done";
    header('Location:../../admin.php');
}
?>
