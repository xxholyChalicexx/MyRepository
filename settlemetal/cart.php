<?php session_start();
require 'assets/config.php';?>
<?php include("header.php") ?>
    <div class="container">
        <div class="row new-row">
            <div class="col-md-6">
                <div class="page-header">
                    <h2>Service List</h2></div>
            </div>
            <div class="col-md-6" style="margin-top:20px">
                <blockquote>
                  <?php
                  $dbc = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
                    # code...
                    $sql = "SELECT d.device_name, m.model_name FROM devices d INNER JOIN models m ON m.device=d.device_id where m.model_id=? ";
                    if($stmt111 = $dbc->prepare($sql))
                    {
                      $stmt111->bind_param('i',$_SESSION['model']);
                      $stmt111->execute();
                      $stmt111->bind_result($device,$model);
                      $stmt111->store_result();

                      while ($stmt111->fetch()) {
                        echo "<p>".$device."</p>
                              <footer>".$model."</footer>";
                              $_SESSION['device_name']=$device;
                              $_SESSION['model_name']=$model;
                      }
                      $stmt111->close();
                    }
                   ?>

                </blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="form-horizontal" action="invoice.php" method="post">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="info">
                                    <th> </th>
                                    <th>Service </th>
                                    <th>Basic Price</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $dbc = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
                              $totalbase=0;
                              foreach ($_SESSION['services'] as $key => $value) {
                                # code...
                                  $id = 0;

                                $sql = "SELECT s.service_name, s.price FROM services s INNER JOIN models m ON m.model_id=s.model_id where m.model_id=?   and s.service_id=? ";
                                if($stmt112 = $dbc->prepare($sql))
                                {
                                  $stmt112->bind_param('ii',$_SESSION['model'],$value);
                                  $stmt112->execute();
                                  $stmt112->bind_result($service,$price);
                                  $stmt112->store_result();

                                  while ($stmt112->fetch()) {

                                    $totalbase+=$price;
                                    echo "<tr>
                                        <td class='danger'>
                                            <button aria-label='close' class='close'><span aria-hidden='true'>×".$id."</span></button>
                                        </td>
                                        <td>".$service."</td>
                                        <td>".$price."</td>
                                        
                                    </tr>";
                                  }
                                  $_SESSION['totalbase']=$totalbase;
                                  $stmt112->close();
                                }
                                  $id++;
                              }
                               ?>

                               <!-- <tr>
                                    <td class="danger">
                                        <button aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </td>
                                    <td>services </td>
                                    <td>basic price</td>
                                    <td>add price<td>
                                </tr>-->
                                <!--<tr class="warning">
                                    <td colspan="2"><em>Total Basic price &amp; Additional cost</em></td>
                                    <td><?=$_SESSION['totalbase']?></td>
                                    <td>Total add</td>
                                </tr>--><!--
                                <tr class="success">
                                    <td colspan="3"><em>Discount</em> </td>
                                    <td colspan="2">Discount price</td>
                                </tr>-->
                                <tr class="info">
                                    <td class="info" colspan="2"><strong>Total</strong> </td>
                                    <td colspan="1"><?=$_SESSION['totalbase']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-9 col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8 col-xs-4 col-xs-offset-7">
                            <button class="btn btn-warning" type="submit">Checkout </button>
                        </div>
                    </div>
                </form>
                <hr>
                <p class="text-center">Notice or Some etra information </p>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>
