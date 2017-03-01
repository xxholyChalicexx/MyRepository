<?php
require '../config.php';
$db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());

if(isset($_POST['submit'])){
    $service = $_POST['service'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    $sql1 = "INSERT INTO services(service_name,model_id,price) VALUES(?,?,?)";
    $result = $db->prepare($sql1);
    $result->bind_param('sii',$service,$model,$price);
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
<a href="admin.php">Back to Admin Page</a>

<form action="service_add.php" method="post">
    <table border="3">
        <tr>
            <th>Service name</th>
            <th>Model name</th>
            <th>Price</th>
        </tr>
        <tr>
            <td><input type="text" name="service"> </td>

            <td>

                <select name="model">
                    <?php /*
                    $sql = "SELECT * FROM models";
                    $result = $db->query($sql);
                    while($row = $result->fetch_object()){
                        //CODE TO FETCH DATA ON COMBO BOX

                        ?>
                        <option value="<?php echo $row->model_id; ?>"><?php echo $row->model_name;?></option><?php } */?>
                </select>

            </td>

            <td><input type="text" name="price"></td>
        </tr>
    </table>
    <input type="submit" name="submit">
</form>
-->