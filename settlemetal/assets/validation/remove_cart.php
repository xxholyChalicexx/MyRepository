<?php
session_start();
$key = $_GET['q'];
unset($_SESSION['services'][$key]);
header('Location:../../cart.php');
?>