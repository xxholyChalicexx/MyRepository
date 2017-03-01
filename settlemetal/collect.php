<?php
$cr_date= date('d-m-Y',strtotime(date('d-m-Y').' +1 day'));
$nxt_date=date('d-m-Y',strtotime(date('d-m-Y').' +2 day'));
require 'assets/config.php';
$category=$_GET['gadget'];
$dbc = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
 ?>

<?php include("header.php"); ?>
    <div class="row new-row">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <h1><strong>Gadget</strong> servicing <small>details </small></h1></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="col-md-4 hidden-xs">
                    <div class="row">
                        <div class="col-md-12"><img class="img-responsive" src="assets/img/devices.png"></div>
                        <div class="col-md-12">
                            <p class="lead bg-success"><strong>What to expect?</strong></p>
                            <p>Background checked and certified technicians</p>
                            <p>3 months warranty </p>
                            <p class="lead bg-success"><strong>Pricing</strong> </p>
                            <p>Service charge as per the scope of work </p>
                            <p>Hardware and software license cost </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1  shadow-left">
                  <div class="container-fluid">
                    <form action="assets/validation/cart_session.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label">Device </label>
                            <select class="form-control input-lg" id="mydevices" required="" name="device" onchange="getmodels()">
                                <option value="" selected="">--devices--</option>
                                <?php
                                $sql = "SELECT device_id, device_name FROM devices where category=? ";
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
                                 ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Model </label>
                            <select class="form-control input-lg" id="mymodels" required name="model" onchange="getservices()">

                            </select>
                        </div>
                        <div class="form-group ">
                          <label class="control-label">Services </label>
                          <div class=" form-inline" id="services">
                          <div class="col-md-6">
                              <label class="alert alert-warning">Select model first</label>
                          </div>
                        </div>
                        </div>
                        <div class="form-group" id="other_serv">
                            <label class="control-label">Other service</label>
                            <textarea name="other_serv" class="form-control" wrap="hard" spellcheck="true" maxlength="100" minlength="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pickup Date </label>
                            <div class="btn-group" data-toggle="buttons">
                              <label class="btn btn-info"><input type="radio" name="pdate" id="option1" checked value="d1"><?= $cr_date; ?></label>
                              <label class="btn btn-info"><input type="radio" name="pdate" id="option2"  value="d2" > <?= $nxt_date; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pickup Time </label>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-info"><input type="radio" name="ptime" id="option1" value="t1" checked>10-11:59AM</label>
                                <label class="btn btn-info"><input type="radio" name="ptime" id="option2" value="t2" > 12-2:00PM</label>
                                <label class="btn btn-info"><input type="radio" name="ptime" id="option3" value="t3" > 2-4:00PM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address </label>
                            <input class="form-control input-lg" name="addr1" type="text" required="" >
                            <input class="form-control input-lg" name="addr2" type="text" >
                        </div>
                        <hr>
                        <button class="btn btn-primary btn-lg" type="submit">Submit </button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <hr>
        <div class="col-md-12">
            <div class="container">
                <p class="lead text-center text-warning"><strong>Addition information</strong></p>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>
