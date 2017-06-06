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

    function viewProfile($you, $others) {
      if ($you == $others) {
        $data = $this->model->readMember($you);
        $message = $this->model->getTotalMessage($you);
        $notification = $this->model->getTotalNotification($you);
        include "profile_edit.php";
      } else {
        $data = $this->model->readMember($others);
        $message = $this->model->getTotalMessage($others);
        $notification = $this->model->getTotalNotification($others);
        include "profile.php";
      }
    }

    function addDump($username, $email, $password, $cpassword) {
      $this->model->createDump($username, $email, $password, $cpassword);
    }

    function viewRegistration($username) {
      $data = $this->model->readDump($username);
      include "profile_registration.php";
    }

    function getRegistrationForm($username, $email, $password, $cpassword) {
      $valid = $this->model->validateForm($username, $email, $password, $cpassword);

      if ($valid == "invalidU") {
        echo "<script>alert('Username yang anda masukkan sudah terdaftar!')</script>";
      } elseif ($valid == "invalidE") {
        echo "<script>alert('Email yang anda masukkan sudah terdaftar!')</script>";
      } elseif ($valid == "invalidP") {
        echo "<script>alert('Password belum memenuhi standar!')</script>";
      } elseif ($valid == "invalidCP") {
        echo "<script>alert('Password yang anda masukkan tidak sama!')</script>";
      } else {
        $_SESSION['username'] = $_POST['username'];
        header("location: ?r=register");
      }
    }
  }
 ?>
