<?php
  if (empty($_SESSION['username'])) {
    header("location: index.php");
  }
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manage Ads - <?php echo $_SESSION['username']; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
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
                <li><a href='?m=<?php echo $_SESSION['username']; ?>'>Messages</a></li>
                <li><a href='#'>Manage Ads</a></li>
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
            <li>
              <a href="?m=<?php echo $_SESSION['username']; ?>">
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
            <li class="active">
              <a href="#">
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
        <div class="col-sm-9 content">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <span class="glyphicon glyphicon-list"></span>Ads
            </div>
            <div class="panel-body">
              <br>
              <div style="overflow: auto">
                <table class="table" id="table" >
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Harga</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th>Kondisi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while ($row = $this->model->fetch($list)) {
                        echo "
                          <tr>
                            <td>$row[2]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                            <td>$row[6]</td>
                            ";
                        if ($row[7] == 0) {
                          echo "
                              <td>Selling</td>";
                        } else {
                          echo "
                              <td>Sold Out</td>";
                        }
                        if ($row[8] == 0) {
                          echo "
                              <td style='color:red;'>
                                <span class='glyphicon glyphicon-refresh' aria-hidden='true'></span>Menunggu Verifikasi
                              </td>";
                        } else {
                          echo "
                              <td style='color:green;'>
                                <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>Terverifikasi
                              </td>";
                        }
                        echo "
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='?ea=$row[0]' style='color:green'><span class='glyphicon glyphicon-pencil'></span></a>
                              </div>
                            </td>
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='#' style='color:red'><span class='glyphicon glyphicon-trash'></span></a>
                              </div>
                            </td>
                        ";
                      }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-6">
                  <h6>Total Ads
                    <span class="label label-info">
                      <?php
                        echo $adsCount[0];
                       ?>
                    </span>
                  </h6>
                </div>
                <div class="col-md-6">
                  <a href="?aa=<?php echo $_SESSION['username']; ?>"><span class="btn btn-primary pull-right">Add</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
