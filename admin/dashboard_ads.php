<?php
  if (empty($_SESSION['username'])) {
    header("location: index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Ads</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dashboard.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">Menu</button>
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
          <a class="navbar-brand" href="#">
    				Administrator
    			</a>
    		</div>
    		<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="../user/" target="_blank">Visit Site</a>
            </li>
            <li>
              <a href="?l=logout" target="_self">Logout</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid main-container">
      <div class="col-md-2 sidebar">
        <div class="row">
          <!-- uncomment code for absolute positioning tweek see top comment in css -->
          <div class="absolute-wrapper"></div>
          <!-- Menu -->
          <div class="side-menu">
            <nav class="navbar navbar-default" role="navigation">
              <!-- Main Menu -->
              <div class="side-menu-container">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="?m=member">
                      <span class="glyphicon glyphicon-user"></span>Manage User
                    </a>
                  </li>
                  <li class="active">
                    <a href="#">
                      <span class="glyphicon glyphicon-shopping-cart"></span>Manage Ads
                    </a>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-10 content">
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
                    <th>ID Iklan</th>
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
                    while ($row = $this->model->fetch($iklan)) {
                      echo "
                        <tr>
                          <td>
                            <a href='#'>$row[0]-$row[1]</a>
                          </td>
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
                            </td>
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='?u=$row[0]' style='color:green'><span class='glyphicon glyphicon-check'></span></a>
                              </div>
                            </td>
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='?da=$row[0]' class='trash'><span class='glyphicon glyphicon-trash'></span></a>
                              </div>
                            </td>
                          </tr>";
                      } else {
                        echo "
                            <td style='color:green;'>
                              <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>Terverifikasi
                            </td>
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='' class='trash'><span class=''></span></a>
                              </div>
                            </td>
                            <td>
                              <div class='pull-right action-buttons'>
                                <a href='?da=$row[0]' class='trash'><span class='glyphicon glyphicon-trash'></span></a>
                              </div>
                            </td>
                          </tr>";
                      }
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
                      $number = $this->model->fetch($total);
                      echo $number[0];
                     ?>
                  </span>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="pull-left footer">
      <p class="col-md-12">
        <hr class="divider">
      </p>
    </footer>
  </body>
</html>
