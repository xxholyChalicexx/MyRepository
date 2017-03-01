<?php
  require("config.php");

  $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
  $username=$_POST["username"];
  $useremail=$_POST["useremail"];
  $userphone=$_POST["userphone"];
  $joindate=$_post["date"];
  $qyery="insert into table users values(?,?,?,?)";
  $stmt= $con->prepare($query);
  $stmt->bind_param('siss', $username, $userphone, $useremail,$joindate);
  $success=$stmt->execute();
  if($success)
    {
      echo "true";
    }
    else {
      echo "false";
    }

 ?>
