<?php
session_start();

  $otp_mobile = str_pad(mt_rand(1111, 9999), 4, '0', STR_PAD_LEFT);
  $_SESSION["OTP"]=$otp_mobile;
  $phone_num=$_POST["number"];
  $message="OTP: ".$otp_mobile;
  $username = "shashankocean@gmail.com";
  $hash = "83Jx074fvIY-KFJ1r77DoQR7TxbGJIpM5pjgRF76Dr";

// Configuration variables. Consult http://api.textlocal.in/docs for more info.
  $test = "0";

// Data for text message. This is the text message data.
  $sender = "SettleMetal"; // This is who the message appears to be from.
// Message details
  $numbers = array($phone_num);
  $message = rawurlencode($message);

  $numbers = implode(',', $numbers);

// Prepare data for POST request
  $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message, 'test' => $test);
  //$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
// Send the POST request with cURL
  $ch = curl_init('http://api.textlocal.in/send/?');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);

// Process your response here
  echo $response.$phone_num."Otp".$otp_mobile;


 ?>
