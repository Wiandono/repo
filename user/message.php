<?php
  if (empty($_SESSION['username'])) {
    header("location: index.php");
  }
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages - <?php echo $_SESSION['username']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/message.css" rel="stylesheet">
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
                <li><a href='?e=<?php echo $_SESSION['username']; ?>'>Profile</a></li>
                <li><a href='#'>Messages</a></li>
                <li><a href='?a=<?php echo $_SESSION['username']; ?>'>Manage Ads</a></li>
                <li class='divider'></li>
                <li><a href='?l=logout'>Logout</a></li>
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
          <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
            <li class="active">
              <a href="#">
                <i class="glyphicon glyphicon-inbox"></i> Inbox
                <span class="label label-danger pull-right">
                  <?php
                    $notifCount = $this->model->fetch($notification);
                    echo $notifCount[0];
                   ?>
                </span>
              </a>
            </li>
            <li>
              <a href="?s=<?php echo $_SESSION['username']; ?>">
                <i class="glyphicon glyphicon-send"></i> Sent Mail
              </a>
            </li>
          </ul><!-- /.nav -->
          <h5 class="nav-email-subtitle">More</h5>
          <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li>
              <a href="?a=<?php echo $_SESSION['username']; ?>">
                <i class="glyphicon glyphicon-barcode"></i> Manage Ads
                <span class="label label-danger pull-right">
                  <?php
                    $adsCount = $this->model->fetch($ads);
                    echo $adsCount[0];
                   ?>
                </span>
              </a>
            </li>
            <li>
              <a href="?e=<?php echo $_SESSION['username']; ?>">
                <i class="glyphicon glyphicon-user"></i> Account Settings
              </a>
            </li>
          </ul><!-- /.nav -->
        </div>
        <div class="col-sm-9">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span>Messages</a></li>
            <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Comment</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <span class="name" style="min-width: 120px; display: inline-block;">Bhaumik Patel</span><span class="">This is big title</span>
                  <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span>
                </a>
              </div>
            </div>
            <div class="tab-pane fade in" id="profile">
              <div class="list-group">
                <div class="list-group-item">
                  <span class="text-center">This tab is empty.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
