<?php include('header.php');
require 'assets/config.php';
session_start();?>

?>
    <div class="row new-row">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <h2><strong>Invoice</strong> </h2></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <h3><strong>User name</strong></h3>
                    <p>Phone number</p>
                    <p>Address</p>
                    <p class="lead">Date: </p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"><img class="img-responsive" alt="Barcode"></div>
                        <div class="col-md-6 col-sm-6"><img class="img-responsive" src="assets/img/compress_LOGO3.png" width="200px"></div>
                    </div>
                    <div class="row" style="padding-top:40px">
                        <div class="col-md-6 col-sm-6">
                            <p class="lead" style="text-align:right"><?= $_SESSION['device_name'] ?> </p>
                        </div>
                        <div class="col-md-6 col-sm-6" style="padding-top:5px">
                            <p><?= $_SESSION['model_name'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="col-md-10">
                    <form class="form-horizontal" action="#" method="post">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="info">
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
                                            <td>".$service."</td>
                                            <td>".$price."</td>
                                            
                                        </tr>";
                                      }
                                      $_SESSION['totalbase']=$totalbase;
                                      $stmt112->close();
                                    }
                                  }
                                   ?>
                                    <!--<tr class="warning">
                                        <td colspan="1"><em>Total Basic price &amp; Additional cost</em></td>
                                        <td><?=$_SESSION['totalbase']?></td>

                                    </tr>-->
                                   <!-- <tr class="success">
                                        <td colspan="2"><em>Discount</em> </td>
                                        <td colspan="1">Text</td>
                                    </tr>-->
                                    <tr class="info">
                                        <td class="info" colspan="1"><strong>Total</strong> </td>
                                        <td colspan="1"><?=$_SESSION['totalbase']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-3 col-xs-4 col-xs-offset-2">
                                <button class="btn btn-warning" type="submit">Pay online</button>
                            </div>
                            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                                <button class="btn btn-warning" type="submit">COD </button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <p class="text-center">Notice or Some etra information </p>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>
