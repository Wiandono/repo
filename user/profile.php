<?php

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile - <?php echo $_GET['e']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
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
                <li class='divider'></li>
                <li><a href='#'>Profile</a></li>
                <li><a href='#'>Messages</a></li>
                <li><a href='#'>Manage Ads</a></li>
                <li class='divider'></li>
                <li><a href='#'>Account Settings</a></li>
                <li class='divider'></li>
                <li><a href='#'>Logout</a></li>
                <li class='divider'></li>
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
          <div class="cart largenav col-sm-2">
            <a class="cart-button">
              <span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="item-number ">0</span>
            </a>
          </div>
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
          <a href="#" class="btn btn-danger btn-block btn-compose-email">Compose Messages</a>
          <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
            <li class="active">
              <a href="#">
                <i class="glyphicon glyphicon-inbox"></i> Inbox
                <span class="label pull-right">7</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-send"></i> Send Mail
              </a>
            </li>
          </ul><!-- /.nav -->
          <h5 class="nav-email-subtitle">More</h5>
          <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li>
              <a href="#">
                <i class="glyphicon glyphicon-barcode"></i> Manage Ads<span class="label label-danger pull-right">3</span>
              </a>
            </li>
            <li>
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
                  <div class="col-xs-12 col-sm-8">
                    <ul class="list-group">
                      <li class="list-group-item">John Doe</li>
                      <li class="list-group-item">23, June 1997</li>
                      <li class="list-group-item"><i class="glyphicon glyphicon-phone"></i> 08111678036 </li>
                      <li class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> john@example.com </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- resume -->
      </div>
    </div>
  </body>
</html>
