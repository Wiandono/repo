<?php
  include "m_admin.php";

  class c_admin {
    public $model;

    function __construct(){
      $this->model = new m_admin();
    }

    function login() {
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $login = $this->model->validate($username, $password);

      if ($login == 'valid') {
        header("location: dashboard.php");
      }
    }
  }
 ?>
