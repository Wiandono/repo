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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>
  </head>
  <body>
    <div id="flipkart-navbar">
      <div class="container">
        <div class="row row1">
          <ul class="largenav pull-right">
            <li class="upper-links"><a class="links" href="#">Registrasi</a></li>
            <li class="dropdown upper-links">
              <a href="#" class="dropdown-toggle upper-links" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                          <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox">Keep me logged-in
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="bottom text-center">
                      New here ? <a href="#"><b>Join Us</b></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="upper-links">
              <a class="links" href="http://clashhacks.in/">
                <span class="glyphicon glyphicon-bell"></span>
              </a>
            </li>
            <li class="dropdown upper-links">
              <a href="#" class="dropdown-toggle upper-links" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <span class="caret"></span></a>
              <ul class="dropdown-menu upper-links" role="menu">
                <li class="divider"></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Manage Ads</a></li>
                <li class="divider"></li>
                <li><a href="#">Account Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
                <li class="divider"></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="row row2">
          <div class="col-sm-2">
            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
            <h1 style="margin:0px;"><span class="largenav">Brand</span></h1>
          </div>
          <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
            <div class="row">
              <input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
              <button class="flipkart-navbar-button col-xs-1">
                <svg width="15px" height="15px">
                  <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="cart largenav col-sm-2">
            <a class="cart-button">
              <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
              </svg> Link
              <span class="item-number ">0</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="mySidenav" class="sidenav">
      <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      </div>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
      <a href="http://clashhacks.in/">Link</a>
    </div>
  </body>
</html>
