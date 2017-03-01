<?php
require '../config.php';
$db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
if(isset($_POST['submit']) && !empty($_POST['name'])){
    $name = $_POST['name'];
    $cat = strtolower($_POST['category']);
    $type = array("phone","tablet","laptop","camera");
    if( !in_array($cat,$type)){
        echo"Please select the correct data";
    }else{
        $sql = "INSERT INTO devices(device_name,category) VALUES(?,?)";
        $result = $db->prepare($sql);
        $result->bind_param('ss',$name,$cat);
        if($result->execute()){
            echo "Data inserted successfully";
            header('Location:../../admin.php');

        }
        else
            echo $db->error;
    }


}
else
    echo "Please Fill all the fields";


?>
