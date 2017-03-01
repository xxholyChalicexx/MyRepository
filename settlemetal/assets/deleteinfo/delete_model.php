<?php
require '../config.php';
$db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)
OR die("Could not connect to MySQL". mysqli_connect_error());
$model_id = $_POST['model_id'];

$sql = "DELETE FROM models WHERE model_id = $model_id";
if($result = $db->query($sql)){
    echo "Done";
    header('Location:../../admin.php');
}else{
    echo "Data related to it still on service or activities";
}

?>