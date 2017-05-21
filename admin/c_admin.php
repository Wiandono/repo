<?php
  include "m_admin.php";

  class c_admin {
    public $model;

    function __construct(){
      $this->model = new m_admin();
    }

    function viewLogin() {
      include "login.php";
    }

    function login() {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $login = $this->model->validate($username, $password);

      if ($login == 'valid') {
        header("location: index.php");
      }
    }

    function logout() {
      session_destroy();
      header("location: index.php");
    }

    function invoke() {
      $user = $this->model->selectAllUser();
      $total = $this->model->getTotalUser();
      $iklan = $this->model->selectAllAds();
      include "dashboard.php";
    }
  }
 ?>
