<?php
  require("config.php");

  $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
  $useremail=$_POST["useremail"];
  $userphone=$_POST["userphone"];
  $qyery="delete from users where user_phone=? and user_email=?";
  $stmt= $con->prepare($query);
  $stmt->bind_param('is', $userphone, $useremail);
  $success=$stmt->execute();
  if($success)
    {
      echo "true";
    }
    else {
      echo "false";
    }

 ?>
