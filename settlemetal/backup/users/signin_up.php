<?php
require("config.php");
session_start();

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
$otp_mobile = str_pad(mt_rand(1111, 9999), 4, '0', STR_PAD_LEFT);
if ($_POST["post"] == "post") {
  $countQuery = "select user_name, user_phone, user_email from users where user_phone=? ";
  $stmt1 = $con->prepare($countQuery);
  $stmt1->bind_param('i', $_POST["user_phone"]);
  $stmt1->execute();
  $stmt1->bind_result($username,$userphone,$useremail);
  $stmt1->store_result();
  if ($stmt1->fetch()) {
        $_SESSION["username"] = "$username";
        $_SESSION["userphone"] = "$userphone";
        $_SESSION["useremail"] = "$useremail";
        
    } else {
        header("Location:../index.php?err=actv");
      }
  } else {
      header("Location:../index.php?page=post");
  }
}
 ?>
