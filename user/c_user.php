<?php
  include "m_user.php";

  class c_user {
    public $model;

    function __construct() {
      $this->model = new m_user();
    }

    function viewHome($type) {
      $usertype = $type;
      include "home.php";
    }

    function viewProfile($type) {
      if ($type == "register") {
        include "profile_registration.php";
      }
    }

    function getRegistrationForm() {
      $_SESSION['username'] = $_POST['username'];
      header("location: ?r=register");
    }
  }
 ?>
