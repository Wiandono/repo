<?php
  include "m_user.php";

  class c_user {
    public $model;

    function __construct() {
      $this->model = new m_user();
    }

    function login($username, $password) {
      $encryptPass = md5($password);
      $login = $this->model->validate($username, $encryptPass);

      if ($login == 'valid') {
        header("location: index.php");
      }
    }

    function logout() {
      session_destroy();
      header("location: index.php");
    }

    function viewHome($type) {
      $usertype = $type;
      include "home.php";
    }

    function viewEditProfile($you, $others) {
      $data = $this->model->readMember($you);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "profile_edit.php";
    }

    function viewEditAds($you, $id) {
      $list = $this->model->readAdsByID($id);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "ads_edit.php";
    }

    function viewRegistration($username) {
      $data = $this->model->readDump($username);
      include "profile_registration.php";
    }

    function viewMessage($you) {
      $data = $this->model->readMember($you);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "message.php";
    }

    function viewSent($you) {
      $data = $this->model->readMember($you);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "sent.php";
    }

    function viewAds($you) {
      $data = $this->model->readMember($you);
      $list = $this->model->readAds($you);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "ads.php";
    }

    function viewAddAds($you) {
      $data = $this->model->readMember($you);
      $notification = $this->model->getTotalNotification($you);
      $ads = $this->model->getTotalAds($you);
      include "ads_add.php";
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

    function addDump($username, $email, $password, $cpassword) {
      $this->model->createDump($username, $email, $password, $cpassword);
    }

    function addAds($username, $judul, $foto, $harga, $kategori, $deskripsi) {
      $this->model->createAds($username, $judul, $foto, $harga, $kategori, $deskripsi);
      header("location: ?a=$username");
    }

    function editAds($id, $judul, $foto, $harga, $kategori, $deskripsi, $sold) {
      $this->model->updateAds($id, $judul, $foto, $harga, $kategori, $deskripsi, $sold);
      header("location: ?a=$username");
    }

    function doRegistration($username, $password, $name, $date, $foto, $phone, $email) {
      $encryptPass = md5($password);
      $this->model->createUser($username, $encryptPass);
      $this->model->createMember($name, $date, $foto, $phone, $email, $username);
      header("location: ?e=$username");
    }

    function doEdit($username, $name, $date, $phone, $email, $password, $foto) {
      $encryptPass = md5($password);
      $this->model->updateUser($username, $encryptPass);
      $this->model->updateMember($username, $name, $date, $phone, $email, $password, $foto);
      header("location: ?e=$username");
    }
  }
 ?>
