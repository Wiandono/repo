<!DOCTYPE html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
  </head>
  <body>
    <div id="flipkart-navbar">
      <div class="container">
        <div class="row row1">
          <ul class="largenav pull-right" style="margin-right:15%">
            <?php
              if ($_GET['t'] == 'u') {
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
                                <form role='form' class='form-horizontal'>
                                  <div class='form-group' style='color:black'>
                                    <label for='email' class='col-sm-2 control-label'>Username</label>
                                    <div class='col-sm-10'>
                                      <input type='text' class='form-control' placeholder='Username'/>
                                    </div>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='email' class='col-sm-2 control-label'>Email</label>
                                    <div class='col-sm-10'>
                                      <input type='email' class='form-control' id='email' placeholder='Email'/>
                                    </div>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='password' class='col-sm-2 control-label'>Password</label>
                                    <div class='col-sm-10'>
                                      <input type='password' class='form-control' id='password' placeholder='Password'/>
                                    </div>
                                  </div>
                                  <div class='form-group' style='color:black'>
                                    <label for='password' class='col-sm-2 control-label'>Confirm Password</label>
                                    <div class='col-sm-10'>
                                      <input type='password' class='form-control' id='password' placeholder='Confirm Password'/>
                                    </div>
                                  </div>
                                  <div class='row'>
                                    <div class='col-sm-2'>
                                    </div>
                                    <div class='col-sm-10'>
                                      <button type='button' class='btn btn-primary btn-sm'>Save & Continue</button>
                                      <button type='button' class='btn btn-default btn-sm' data-dismiss='modal' aria-hidden='true'>Cancel</button>
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
                          <form class='form' role='form' method='post' action='login' accept-charset='UTF-8' id='login-nav'>
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
                              <button type='submit' class='btn btn-primary btn-block'>Sign in</button>
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
                    <li><a href='#'>Profile</a></li>
                    <li><a href='#'>Messages</a></li>
                    <li><a href='#'>Manage Ads</a></li>
                    <li class='divider'></li>
                    <li><a href='#'>Account Settings</a></li>
                    <li class='divider'></li>
                    <li><a href='#'>Logout</a></li>
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
</html>
