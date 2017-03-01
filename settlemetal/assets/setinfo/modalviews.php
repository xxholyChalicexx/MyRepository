<!-- Modal view for retreaving user information -->
<script type="application/javascript">
    function getValue(data){
        if (data == "") {
            document.getElementById("txtHint").value = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").value = this.responseText;
                }
            };
            xmlhttp.open("GET","assets/validation/getuser.php?q="+data,true);
            xmlhttp.send();
        }
    }
</script>

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> User info!</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="assets/setinfo/addUser.php" method="post">
              <div class="form-group">
                  <label class="control-label">User Name</label>
                  <input class="form-control input-lg" type="text" name="uName" required="" autofocus="">
              </div>
              <div class="form-group">
                  <label class="control-label">Email </label>
                  <input class="form-control input-lg" type="email" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              </div>
              <div class="form-group">
                  <label class="control-label">Phone Number</label>
                  <input class="form-control input-lg" type="tel" name="num" required="" maxlength="10" >
              </div>
              <p class="text-right">
                  <button class="btn btn-default" type="submit" name="submit">Save </button>
              </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal view for retreaving Device information -->
<div class="modal fade" id="deviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> Device info!</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="assets/setinfo/device_add.php">
            <div class="form-group">
                <label class="control-label">Device Name</label>
                <input class="form-control input-lg" type="text" name="name">
            </div>
            <div class="form-group">
                <label class="control-label">Gadget </label>
                <select class="form-control input-lg" name="category">
                    <option value="0" selected="">---select--</option>
                    <option value="0" selected=""><script>getValue();</script></option>
                    <option value="phone">Mobile</option>
                    <option value="laptop">Laptop</option>
                    <option value="tablet">Tablet</option>
                    <option value="camera">Camera</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <p>Paragraph</p>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Save </button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal view for retreaving Model information -->
<div class="modal fade" id="modelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> Model info!</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form method="post" action="assets/setinfo/model_add.php">
            <div class="form-group">
                <label class="control-label">Model Name</label>
                <input class="form-control input-lg" type="text" name="model" autofocus="">
            </div>
            <div class="form-group">
                <label class="control-label">Device </label>
                <select class="form-control input-lg" name="brand">
                    <?php
                    $sql = "SELECT * FROM devices";
                    $result = $db->query($sql);
                    while($row = $result->fetch_object()){
                        //CODE TO FETCH DATA ON COMBO BOX

                        ?>
                        <option value="<?php echo $row->device_id; ?>"><?php echo $row->device_name;?></option><?php } ?>
            </div>
            <div class="form-group">
                <label class="control-label">Image </label>
                <input class="form-control input-lg" type="text">
                <input type="file">
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <p>notice </p>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-lg" type="submit" name="submit">Save </button>
                </div>
            </div>
           <!-- <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox">Add service</label>
                </div>
                <hr>
                <form class="hidden">
                    <div class="form-group">
                        <label class="control-label">Service Name</label>
                        <input class="form-control input-lg" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Price </label>
                        <input class="form-control input-lg" type="text">
                    </div>
                </form>
                <p class="text-right">
                    <button class="btn btn-default" type="button">Save </button>
                </p>
            </div>-->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal view for retreaving service information -->
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> New Services </h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="assets/setinfo/service_add.php" method="post">
            <div class="form-group">
                <label class="control-label">Model </label>
                <select class="form-control input-lg" autofocus="" name="model">
                    <option value="0" selected="">--Select--</option>
                    <?php
                    $sql = "SELECT * FROM models";
                    $result = $db->query($sql);
                    while($row = $result->fetch_object()){
                        //CODE TO FETCH DATA ON COMBO BOX

                        ?>
                        <option value="<?php echo $row->model_id; ?>"><?php echo $row->model_name;?></option><?php } ?>
                </select>
            </div>
            <!--<div class="form-group" name="model">
                <label class="control-label">Model </label>
                <select class="form-control input-lg">
                    <option value="" selected="">--Select--</option>
                </select>
            </div>-->
            <div class="form-group">
                <label class="control-label">Service Name</label>
                <input class="form-control input-lg" type="text" name="service" >
            </div>
            <div class="form-group">
                <label class="control-label">Price </label>
                <input class="form-control input-lg" type="text" name="price">
            </div>
            <p class="text-right">
                <button class="btn btn-default" type="submit" name="submit">Save </button>
            </p>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal view for retreaving Activity information -->
<div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i> Activity </h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="page-header">

                <h1>User Name </h1></div>
            <p class="lead">Device </p>
            <p class="lead">Model </p>
            <p class="lead">Service: </p>
            <p class="lead">Pickup Date: Pickup Time</p>
            <p class="lead">Booking Date</p>
          </div>
          <div class="col-md-12">
              <form class="form-horizontal" action = "assets/setinfo/editActivity.php" method="post">
                    <input type="hidden" id="txtHint" name="id">
                  <div class="form-group">
                      <div class="col-sm-12" "col-md-2">
                          <label class="control-label">Status </label>
                      </div>
                      <div class="col-sm-12" "col-md-8">
                          <select class="form-control" name = "status">
                              <option value="0" selected="">--select--</option>
                              <option value="Received">Received</option>
                              <option value="Repairing">Repairing</option>
                              <option value="Deliverd">Deliverd</option>
                          </select>
                      </div>
                  </div>
                  <p class="text-right">
                      <button class="btn btn-default" type="submit">Save <script></script></button>
                  </p>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
