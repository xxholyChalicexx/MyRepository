<?php
require '../config.php';
$db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE activities SET status='$status' WHERE barcode=$id";
if($result = $db->query($sql)){
    header('Location:../../admin.php');
}
else
    echo $db->error;

?>