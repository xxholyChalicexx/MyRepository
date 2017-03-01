<?php
require '../config.php';
$db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
if(isset($_POST['submit'])){
    $model = $_POST['model'];
    $device = $_POST['brand'];
    $image = 'image';

    $sql1 = "INSERT INTO models(model_name,device,image) VALUES(?,?,?)";
    $result = $db->prepare($sql1);
    $result->bind_param('sis',$model,$device,$image);
    if($result->execute()){
        echo "Data inserted successfully";
        header('Location:../../admin.php');
    }
    else{
        echo $db->error;
    }
}



?>
<!--
<form action="model_add.php" method="post">
    <table border="3">
        <tr>
            <th>Model name</th>
            <th>Brand name</th>
        </tr>
        <tr>
            <td><input type="text" name="model"> </td>
            <td>

                <select name="brand">
                    <?php
                    /*$sql = "SELECT * FROM devices";
                    $result = $db->query($sql);
                    while($row = $result->fetch_object()){
                        //CODE TO FETCH DATA ON COMBO BOX

                        ?>
                    <option value="<?php echo $row->device_id; ?>"><?php echo $row->device_name;?></option><?php } */?>
                </select>

            </td>
        </tr>
    </table>
    <input type="submit" name="submit">
</form>
-->