<?php
require '../config.php';
$db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)
OR die("Could not connect to MySQL". mysqli_connect_error());
$userId = $_POST['id'];
echo $userId;
$sql = "DELETE FROM users WHERE user_id=$userId";
if($result = $db->query($sql)){
    echo "Done";
    header('Location:../../admin.php');
}
else
    echo $db->error;

?>