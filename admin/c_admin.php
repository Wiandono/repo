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

    function viewAds($type) {
      $iklan = $this->model->selectAll($type);
      $total = $this->model->getTotalAds();
      include "dashboard_ads.php";
    }

    function viewUser($type) {
      $user = $this->model->selectAll($type);
      $total = $this->model->getTotalUser();
      include "dashboard_user.php";
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

    function deleteUser($id) {
      $deleteUser = $this->model->deleteUser($id);
      header("location: index.php");
    }

    function deleteAds($id) {
      $deleteAds = $this->model->deleteAds($id);
      header("location: index.php?a=ads");
    }

    function verifyAds($id) {
      $verifyAds = $this->model->verifyAds($id);
      header("location: index.php?a=ads");
    }
  }
 ?>
