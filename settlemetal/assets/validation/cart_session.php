<?php
session_start();

$_SESSION['device']= $_POST['device'];
$_SESSION['model']= $_POST['model'];
$_SESSION['services']=$_POST['service'];
$_SESSION['other_serv']= $_POST['other_serv'];
$_SESSION['pdate']= $_POST['pdate'];
$_SESSION['ptime']= $_POST['ptime'];
$_SESSION['addr1']=$_POST['addr1'];
$_SESSION['addr2']=$_POST['addr2'];
header('Location:../../cart.php')
?>
