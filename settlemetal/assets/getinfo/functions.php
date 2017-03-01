
<?php
include('config.php');
function getAactivity(){
  $sql = "SELECT a.barcode,a.other_service,a.booking_date,a.status,a.pickup_date1,a.pickup_time,a.pickup_location,a.price,a.updated_price FROM activities a INNER JOIN user u, devices d, models m, services s ON  a.user=u.user_id a.service=s.service_id  ";
  if($stmt112 = $dbc->prepare($sql))
  {
    $stmt112->bind_param('s',$category);
    $stmt112->execute();
    $stmt112->bind_result($device_id, $device_name);
    $stmt112->store_result();
    while ($stmt112->fetch()) {
    echo "<option value='".$device_id."'>".$device_name."</option>";
    }
    $stmt112->close();
  }
}

 ?>
