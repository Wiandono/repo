<?php
  if (isset($_POST['save'])) {
    $controller = new c_user();
    $row = $this->model->fetch($data);

    $target_path = "img/profile/";
  	$target_path = $target_path . basename($_FILES['uploadPhoto']['name']);

  	if(move_uploaded_file($_FILES['uploadPhoto']['tmp_name'], $target_path)) {
      	$foto = $target_path;
  	}

    $controller->doRegistration($row[0], $row[2], $_POST['name'], $_POST['date'], $foto, $_POST['phone'], $_POST['email']);
  }
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile - Registration</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
    <script>
    	$(document).ready(function(){
    		var date_input=$('input[name="date"]'); //our date input has the name "date"
    		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    		date_input.datepicker({
    			format: 'yyyy-mm-dd',
    			container: container,
    			todayHighlight: true,
    			autoclose: true,
    		})
    	})
    </script>
    <style>
      .bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form {
        font-family: Arial, Helvetica, sans-serif;
        color: black
      }

      .bootstrap-iso form button, .bootstrap-iso form button:hover {
        color: white !important;
      }

      .asteriskField {
        color: red;
      }
    </style>
  </head>
  <body>
    <div id="flipkart-navbar">
      <div class="container">
        <div class="row row1">
          <ul class="largenav pull-right" style="margin-right:15%">
            <li class='upper-links'>
              <a class='links' href='#'>
                <span class='glyphicon glyphicon-bell'></span>
              </a>
            </li>
            <li class='dropdown upper-links'>
              <a href='#' class='dropdown-toggle upper-links' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> My Account <span class='caret'></span></a>
              <ul class='dropdown-menu upper-links' role='menu'>
              </ul>
            </li>
          </ul>
        </div>
        <div class="row row2">
          <div class="col-sm-3">
            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ NgemilDulu</span></h2>
            <h1 style="margin:0px;"><span class="largenav">NgemilDulu</span></h1>
          </div>
          <div class="flipkart-navbar-search smallsearch col-sm-7 col-xs-11">
            <div class="row">
              <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Categories and more" name="">
              <button class="flipkart-navbar-button col-xs-1"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
          <div class="cart largenav col-sm-2"></div>
        </div>
      </div>
    </div>
    <div id="mySidenav" class="sidenav">
      <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Menu</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      </div>
      <a href="#">Registrasi</a>
      <a href="#">Login</a>
      <a href="#">Notifikasi</a>
      <a href="#">My Account</a>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li class="active">
              <a href="#">
                <i class="glyphicon glyphicon-user"></i> Account Settings
              </a>
            </li>
          </ul><!-- /.nav -->
        </div>
        <div class="col-sm-9">
          <!-- resume -->
          <div class="panel panel-default">
            <div class="panel-heading resume-heading">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-xs-12 col-sm-4">
                    <figure>
                      <img class="img-circle img-responsive" alt="" src="img/profile/default.png">
                    </figure>
                  </div>
                  <br>
                  <br>
                  <div class="col-xs-12 col-sm-8">
                    <ul class="list-group">
                      <?php
                        $row = $this->model->fetch($data);
                        echo "
                          <li class='list-group-item'>$row[0]</li>
                          <li class='list-group-item'>-</li>
                          <li class='list-group-item'><i class='glyphicon glyphicon-phone'></i> -</li>
                          <li class='list-group-item'><i class='glyphicon glyphicon-envelope'></i> $row[1]</li>
                        ";
                       ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="container panel-body bs-callout bs-callout-danger" style="padding-left:5%">
              <div class="row">
                <h2>User Information</h2>
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <fieldset>
                    <!-- Form Name -->
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>
                      <div class="col-md-4">
                        <input id="textinput" name="name" placeholder="Nama lengkap" class="form-control input-md" required="" type="text">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Date</label>
                      <div class="col-md-4 bootstrap-iso">
                        <input class="form-control" id="date" name="date" placeholder="YYYY/MM/DD" type="text">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">No. HP</label>
                      <div class="col-md-4">
                        <input id="textinput" name="phone" placeholder="Phone number" class="form-control input-md" required="" type="text">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">E-mail</label>
                      <div class="col-md-4">
                        <input id="textinput" name="email" placeholder="example@domain.com" class="form-control input-md" required="" type="text" value=<?php echo $row[1]; ?>>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Password</label>
                      <div class="col-md-4">
                        <input id="textinput" name="password" placeholder="Password" class="form-control input-md" required="" type="password" value=<?php echo $row[2]; ?>>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Confirm Password</label>
                      <div class="col-md-4">
                        <input id="textinput" name="cpassword" placeholder="Confirm password" class="form-control input-md" required="" type="password" value=<?php echo $row[2]; ?>>
                      </div>
                    </div>
                    <!-- File Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="uploadPhoto">Upload photo</label>
                      <div class="col-md-4">
                        <input id="uploadPhoto" name="uploadPhoto" class="input-file" type="file">
                      </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="save"></label>
                      <div class="col-md-8">
                        <button id="save" name="save" class="btn btn-success" type="submit">Save</button>
                        <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- resume -->
      </div>
    </div>
  </body>
</html>
