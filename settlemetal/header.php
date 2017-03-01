<!DOCTYPE html>
<<?php session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/user.css">
	<script src="https://use.fontawesome.com/99187b31a1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/validation/validation.js"></script>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" style="color:#787878" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </button><a class="navbar-brand navbar-link" href="index.php"><img src="assets/img/LOGO.png" width="190px"> </a></div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right" >
                <li role="presentation"><a href="howitwork.php"><i class="fa fa-exclamation fa-1x" aria-hidden="true"></i>&nbsp;How it work</a></li>
                <li role="presentation"><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in fa-1x" aria-hidden="true"></i>&nbsp;Login/Signup </a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> Welcome!</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <center>
            <p>
              <input type="text" class="form-control input-lg" placeholder="Mobile number" name="number" required="">
            </p>
            <p>
              <button type="submit" class="btn btn-primary btn-lg" class="input-sm" ><i class="fa fa-sign-in fa-1x"></i> Signin</button>
            </p>
          </center>
        </form>
      </div>

      <div class="modal-footer">
          <center>
            <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook Login</button>
          </center>
      </div>
      <div class="modal-footer">
          <center>
            <button type="button" class="btn btn-default btn-lg"><i class="fa fa-google-plus" aria-hidden="true"></i> Google Login</button>
          </center>
      </div>
    </div>
  </div>
</div>
