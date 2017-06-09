<?php
  if (isset($_POST['save'])) {
    $controller = new c_user();
    $controller->addDump($_POST['username'], $_POST['email'], $_POST['password'], $_POST['cpassword']);
    $controller->getRegistrationForm($_POST['username'], $_POST['email'], $_POST['password'], $_POST['cpassword']);
  }

  if (isset($_POST['login'])) {
    $controller = new c_user();
    $controller->login($_POST['username'], $_POST['password']);
  }
 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>NgemilDulu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
    <script type="text/javascript">
      function usernameAvailability() {
        jQuery.ajax({
          url: "check_availability.php",
          data:'username='+$("#username").val(),
          type: "POST",
          success:function(data){
            $("#user-availability-status").html(data);
          },
          error:function (){}
        });
      }

      function emailAvailability() {
        jQuery.ajax({
          url: "check_availability.php",
          data:'email='+$("#email").val(),
          type: "POST",
          success:function(data){
            $("#email-availability-status").html(data);
          },
          error:function (){}
        });
      }

      function passwordLongability() {
        jQuery.ajax({
          url: "check_availability.php",
          data:'password='+$("#password").val(),
          type: "POST",
          success:function(data){
            $("#password-long-status").html(data);
          },
          error:function (){}
        });
      }

      function confirmPassword() {
        jQuery.ajax({
          url: "check_password.php",
          data : {cpassword : $("#cpassword").val(), password : $("#password").val() },
          type: "POST",
          success:function(data){
            $("#confirm-password-status").html(data);
          },
          error:function (){}
        });
      }
    </script>
    <style>
      .carousel-inner > .item > img {
        margin: 0 auto;
      }

      .text-center {
          text-align:center;
      }

      .product-box h3>a,.product-box h3>a:hover,.product-box h3>a:focus {
          color:#000;
          text-decoration:none;
      }

      .end-box {
        padding: 20px;
        color: #fff;
        background-color: #000;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div id="flipkart-navbar">
      <div class="container">
        <div class="row row1">
          <ul class="largenav pull-right" style="margin-right:15%">
            <?php
              if ($usertype == 'u') {
                echo "
                <li class='upper-links'>
                  <a class='links' href='#' data-toggle='modal' data-target='#myModal'>Registrasi</a>
                </li>
                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
                  <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                        <h4 class='modal-title' id='myModalLabel' style='color:black'>NgemilDulu</h4>
                      </div>
                      <div class='modal-body'>
                        <div class='row'>
                          <div class='col-md-8' style='border-right: 1px dotted #C2C2C2;padding-right: 30px;'>
                            <!-- Nav tabs -->
                            <ul class='nav nav-tabs'>
                              <li class='active'>
                                <a href='#Registration' data-toggle='tab'>Registration</a>
                              </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class='tab-content'>
                              <div class='tab-pane active' id='Registration'>
                                <br>
                                <form method='POST' class='form-horizontal'>
                                  <div class='form-group' style='color:black'>
                                    <label for='email' class='col-sm-2 control-label'>Username</label>
                                    <div class='col-sm-6'>
                                      <input id='username' onBlur='usernameAvailability()' type='text' class='form-control' placeholder='Username' name='username' required/>
                                    </div>
                                    <span id='user-availability-status' class='col-sm-4 control-label'></span>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='email' class='col-sm-2 control-label'>Email</label>
                                    <div class='col-sm-6'>
                                      <input onBlur='emailAvailability()' type='email' class='form-control' id='email' placeholder='Email' name='email' required/>
                                    </div>
                                    <span id='email-availability-status' class='col-sm-4 control-label'></span>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='password' class='col-sm-2 control-label'>Password</label>
                                    <div class='col-sm-6'>
                                      <input onBlur='passwordLongability()' type='password' class='form-control' id='password' placeholder='Password' name='password' required/>
                                    </div>
                                    <span id='password-long-status' class='col-sm-4 control-label'></span>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='password' class='col-sm-2 control-label'>Confirm Password</label>
                                    <div class='col-sm-6'>
                                      <input onBlur='confirmPassword()' type='password' class='form-control' id='cpassword' placeholder='Confirm Password' name=cpassword required/>
                                    </div>
                                    <span id='confirm-password-status' class='col-sm-4 control-label'></span>
                                  </div>
                                  <div class='row'>
                                    <div class='col-sm-2'>
                                    </div>
                                    <div class='col-sm-10'>
                                      <button id='continue' class='btn btn-default btn-primary' name='save' type='submit'>Save & Continue</button>
                                      <button type='button' class='btn btn-default' data-dismiss='modal' aria-hidden='true'>Cancel</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div id='OR' class='hidden-xs'>OR</div>
                          </div>
                          <div class='col-md-4'>
                            <ul class='nav nav-tabs'>
                              <li class='active'>
                                <a href='#' data-toggle='tab'>Login</a>
                              </li>
                            </ul>
                            <div class='row text-center sign-with'>
                              <div class='col-md-12' style='color:black'>
                                <h3>Already have an account ?</h3>
                              </div>
                              <div class='col-md-12'>
                                <div class='form-group'>
                                  <label class='sr-only' for='exampleInputEmail2'>Email address</label>
                                  <input autocomplete='off' type='email' class='form-control' id='exampleInputEmail2' placeholder='Email address' required>
                                </div>
                                <div class='form-group'>
                                  <label class='sr-only' for='exampleInputPassword2'>Password</label>
                                  <input autocomplete='off' type='password' class='form-control' id='exampleInputPassword2' placeholder='Password' required>
                                  <div class='help-block text-right'><a href=''>Forget the password ?</a></div>
                                </div>
                                <div class='form-group'>
                                  <button type='submit' class='btn btn-primary btn-sm'>Sign in</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <li class='dropdown upper-links' >
                  <a href='#' class='dropdown-toggle upper-links' data-toggle='dropdown'><b>Login</b> <span class='caret'></span></a>
                  <ul id='login-dp' class='dropdown-menu'>
                    <li>
                      <div class='row'>
                        <div class='col-md-12'>
                          <form class='form' method='post' accept-charset='UTF-8' id='login-nav'>
                            <div class='form-group'>
                              <label class='sr-only' for='usernameLogin'>Email address</label>
                              <input name='username' autocomplete='off' type='text' class='form-control' id='usernameLogin' placeholder='Username' required>
                            </div>
                            <div class='form-group'>
                              <label class='sr-only' for='passwordLogin'>Password</label>
                              <input name='password' autocomplete='off' type='password' class='form-control' id='passwordLogin' placeholder='Password' required>
                              <div class='help-block text-right'><a href=''>Forget the password ?</a></div>
                            </div>
                            <div class='form-group'>
                              <button type='submit' class='btn btn-primary btn-block' name='login'>Sign in</button>
                            </div>
                            <div class='checkbox'>
                              <label>
                                <input type='checkbox'>Keep me logged-in
                              </label>
                            </div>
                          </form>
                        </div>
                        <div class='bottom text-center'>
                          New here ? <a href='#' data-toggle='modal' data-target='#myModal'><b>Join Us<b></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>";
              } else {
                echo "
                <li class='upper-links'>
                  <a class='links' href='#'>
                    <span class='glyphicon glyphicon-bell'></span>
                  </a>
                </li>
                <li class='dropdown upper-links'>
                  <a href='#' class='dropdown-toggle upper-links' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> My Account <span class='caret'></span></a>
                  <ul class='dropdown-menu upper-links' role='menu'>
                    <li class='divider'></li>
                    <li><a href='?e=".$_SESSION['username']."'>Profile</a></li>
                    <li><a href='?m=".$_SESSION['username']."'>Messages</a></li>
                    <li><a href='?a=".$_SESSION['username']."'>Manage Ads</a></li>
                    <li class='divider'></li>
                    <li><a href='?l=logout' target='_self'>Logout</a></li>
                    <li class='divider'></li>
                  </ul>
                </li>";
              }
             ?>
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
              <button class="flipkart-navbar-button col-xs-1">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </div>
          </div>
          <div class="cart largenav col-sm-2">
            <a class="cart-button">
              <span class="glyphicon glyphicon-shopping-cart"></span> Cart
              <span class="item-number ">0</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/iklan/slide1.jpg" alt="Slide 1">
          </div>

          <div class="item">
            <img src="img/iklan/slide2.jpg" alt="Slide 2">
          </div>

          <div class="item">
            <img src="img/iklan/slide3.jpg" alt="Slide 3">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 text-center col-sm-6 col-xs-6">
          <div class="thumbnail product-box">
            <img src="assets/img/wow.png"/>
            <div class="caption">
              <h3><a href="#">Snack all in One </a></h3>
              <p>Price : <strong>Rp 300.900</strong>  </p>
              <p><a href="#">Ptional dismiss button </a></p>
              <p>Ptional dismiss button in tional dismiss button in   </p>
              <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center col-sm-6 col-xs-6">
          <div class="thumbnail product-box">
            <img src="assets/img/wow.png"/>
            <div class="caption">
              <h3><a href="#">Snack all in One </a></h3>
              <p>Price : <strong>Rp 300.900</strong>  </p>
              <p><a href="#">Ptional dismiss button </a></p>
              <p>Ptional dismiss button in tional dismiss button in   </p>
              <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center col-sm-6 col-xs-6">
          <div class="thumbnail product-box">
            <img src="assets/img/wow.png"/>
            <div class="caption">
              <h3><a href="#">Snack all in One </a></h3>
              <p>Price : <strong>Rp 300.900</strong>  </p>
              <p><a href="#">Ptional dismiss button </a></p>
              <p>Ptional dismiss button in tional dismiss button in   </p>
              <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="row">
            <div class="col-md-9">
              <h3>Hot Items</h3>
            </div>
            <div class="col-md-3">
              <!-- Controls -->
              <div class="controls pull-right hidden-xs">
                <a class="glyphicon glyphicon-chevron-left btn btn-primary" href="#carousel-example-generic" data-slide="prev"></a>
                <a class="glyphicon glyphicon-chevron-right btn btn-primary" href="#carousel-example-generic" data-slide="next"></a>
              </div>
            </div>
          </div>
          <br>
          <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 1</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 2</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 3</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 4</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 5</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="col-item">
                      <div class="photo">
                        <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="price col-md-6">
                            <h5>Sample Product 6</h5>
                            <h5 class="price-text-color">$199.99</h5>
                          </div>
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Buy</a>
                          </p>
                          <p class="btn-details">
                            <i class="glyphicon glyphicon-th-list"></i>
                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                          </p>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
  </body>
  <br>
  <br>
  <footer>
    <div class="col-md-12 end-box ">
        &copy; 2017 | &nbsp; All Rights Reserved | &nbsp; www.NgemilDulu.com | &nbsp; 24x7 support | &nbsp; Email us: NgemilDulu@gmail.com
    </div>
  </footer>
</html>
