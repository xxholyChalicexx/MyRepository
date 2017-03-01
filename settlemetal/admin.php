<?php
require 'assets/config.php';
$db = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)
OR die("Could not connect to MySQL". mysqli_connect_error());
include("header.php");
include("assets/setinfo/modalviews.php");

?>
    <div class="row new-row">
        <div class="col-md-12 col-sm-12">
            <div class="container">
                <div class="page-header">
                    <h2>Admin <small>Name of the admin</small></h2></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 container-fluid navbar-header">
            <button class="navbar-toogle btn btn-default btn-sm hidden visible-xs-block" type="button" data-toggle="collapse" data-target="#toogleme-1">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 collapse navbar-collapse " id="toogleme-1" role="tablist">
            <ul class="list-group shadow-left">
                <li class="active"><a href="#users" role="tab" data-toggle="tab" class="list-group-item" ><span class="glyphicon glyphicon-user"></span> Users </a></li>
                <li class=""><a href="#devices" role="tab" data-toggle="tab" class="list-group-item"><span class="glyphicon glyphicon-phone"></span> Devices </a></li>
                <li class=""><a href="#models" role="tab" data-toggle="tab" class="list-group-item"><span class="glyphicon glyphicon-compressed"></span> Models </a></li>
                <li class=""><a href="#services" role="tab" data-toggle="tab" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Services </a></li>
                <li class=""><a href="#activitys" role="tab" data-toggle="tab" class="list-group-item"><span class="glyphicon glyphicon-flash"></span> User Activity</a></li>
            </ul>
        </div>

        <div class="col-md-10 col-sm-9 tab-content shadow-left">
            <div class="row tab-pane fade in active"  id="users">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>

                                <tr>
                                    <th> <a href="#" data-toggle="modal" data-target="#userModal">ADD </a></th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Phone Number</th>
                                    <th>Email </th>
									<th>Type </th>
                                    <th>is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            //code for fetching data from users
							$sql = "SELECT * FROM users";
                            $result = $db->query($sql);
                            while($row = $result->fetch_object()){


                            ?>
                                <tr>
                                    <td><form action="assets/deleteinfo/edit.php" method="post">
                                            <input type="submit" value="Delete" >
                                            <input type="hidden" name="id" value="<?php echo $row->user_id; ?>">
                                        </form></td>
                                    <td><?php echo $row->user_id; ?></td>
                                    <td><?php echo $row->user_name; ?></td>
                                    <td><?php echo $row->user_phone; ?></td>
                                    <td><?php echo $row->user_email; ?></td>
                                    <td>dev</td>
                                    <td>active</td>
                                </tr>
                                    <?php }  //END OF CODE ?>
								    <!--<tr>
                                    <td> <a href="#">Delete </a></td>
                                    <td>1002</td>
                                    <td>Mohit</td>
                                    <td>901969456</td>
                                    <td>Mohit@gmail.com</td>
									<td>dev</td>
                                    <td>active</td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row tab-pane fade" id="devices">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> <form action="#" method="post">
                                            <input type="button" name="submit1" value="ADD" data-toggle="modal" data-target="#deviceModal">
                                        </form> </th>
                                    <th>Device ID</th>
                                    <th>Device Name</th>
                                    <th>Category </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    //CODE TO FETCH THE DATA FROM DEVICES TABLE
                                    $sql1 = "SELECT * FROM devices";
                                    $result1 = $db->query($sql1);
                                    while($row1 = $result1->fetch_object()){


                                    ?>
                                    <td><form action="assets/deleteinfo/delete_device.php" method="post">
                                            <input type="submit" value="Delete" name="device">
                                            <input type="hidden" name="device_id" value="<?php echo $row1->device_id; ?>">
                                        </form></td>
                                    <td><?php echo $row1->device_id; ?></td>
                                    <td><?php echo $row1->device_name; ?></td>
                                    <td><?php echo $row1->category; ?></td>
                                </tr>
                            <?php } // END OF CODE?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row tab-pane fade" id="models">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> <form action="#" method="post">
                                            <input type="button" name="submit1" value="ADD" data-toggle="modal" data-target="#modelModal">
                                        </form> </th>
                                    <th>Model ID</th>
                                    <th>Model name</th>
                                    <th>Device </th>
                                    <th>Image </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            //CODE TO FETCH DEVICE AND MODELS DETAILS BY INNER JOIN
                            $sql2 = "SELECT * FROM models INNER JOIN devices ON models.device = devices.device_id";
                            $result2 = $db->query($sql2);
                            while($row2 = $result2->fetch_object()){


                            ?>
                                <tr>
                                    <td><form action="assets/deleteinfo/delete_model.php" method="post">
                                            <input type="submit" value="Delete">
                                            <input type="hidden" name="model_id" value="<?php echo $row2->model_id; ?>">

                                        </form></td>
                                    <td><?php echo $row2->model_id; ?></td>
                                    <td><?php echo $row2->model_name; ?></td>
                                    <td><?php echo $row2->device_name; ?></td>
                                    <td><?php echo $row2->image; ?></td>
                                </tr>
                            <?php }
                            // END OF CODE
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row tab-pane fade" id="services">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> <form action="#" method="post">
                                            <input type="button" name="submit1" value="ADD" data-toggle="modal" data-target="#serviceModal">
                                        </form></th>
                                    <th>Service ID</th>
                                    <th>Service </th>
                                    <th>Model </th>
                                    <th>Price </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            //CODE FOR FETCHING DATA FROM  SERVICES AND MODELS TABLE BY INNER JOIN
                            $sql3 = "SELECT * FROM services INNER JOIN models ON services.model_id = models.model_id";
                            $result3 = $db->query($sql3);
                            while($row3 = $result3->fetch_object()) {

                                ?>
                                <tr>
                                    <td>
                                        <form action="assets/deleteinfo/delete_service.php" method="post">
                                            <input type="submit" value="Delete">
                                            <input type="hidden" name="service_id" value="<?php echo $row3->service_id; ?>">
                                        </form>
                                    </td>
                                    <td><?php echo $row3->service_id; ?></td>
                                    <td><?php echo $row3->service_name; ?></td>
                                    <td><?php echo $row3->model_name; ?></td>
                                    <td><?php echo $row3->price; ?></td>
                                </tr>
                                <?php
                            }
                            //END OF CODE
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row tab-pane fade"  id="activitys">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="#"> </a>
                                    </th>
                                    <th>User </th>
                                    <th>Device </th>
                                    <th>Model </th>
                                    <th>Service </th>
                                    <th>status </th>
                                    <th>Pickup date</th>
                                    <th>Pickup time</th>
                                    <th>Booking date</th>
                                    <th>Extra</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            //GET DATA FROM THE activities TABLE
                            $sql4 = "SELECT * FROM activities";
                            $result4 = $db->query($sql4);
                            while($row4 = $result4->fetch_object()){


                            ?>
                                <tr>

                                    <td><a id="target" data-toggle="modal" data-target="#activityModal" onclick="getValue(<?php echo $row4->barcode; ?>)">Edit </a>

                                    </td>
                                    <td><?php echo $row4->user; ?></td>
                                    <td><?php echo $row4->device; ?></td>
                                    <td><?php echo $row4->model; ?></td>
                                    <td><?php echo $row4->service; ?></td>
                                    <td><?php echo $row4->status; ?></td>
                                    <td><?php echo $row4->pickup_date1 , "/" , $row4->pickup_date2; ?></td>
                                    <td><?php echo $row4->pickup_time; ?></td>
                                    <td><?php echo $row4->booking_date; ?></td>
                                    <td><script>document.write(data);</script></td>
                                </tr>
                            <?php }
                            //CODE ENDS HERE ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php") ?>
