<?php
require '../config.php';
$db = new mysqli(HOSTNAME, USERNAME, "",DATABASE);

$name= $_POST['uName'];
$email = $_POST['email'];
$phNumber = $_POST['num'];
$date = NULL;
//Insert the user in the USERS table

$sql="INSERT INTO users(user_name,user_phone,user_email,user_join_date) VALUES (?,?,?,?)";
$result = $db->prepare($sql);
$result->bind_param('siss',$name,$phNumber,$email,$date);
if($result->execute()){
    echo "data inserted";
    header('Location:../../admin.php');
}
else{
    echo $db->error;
}



?>