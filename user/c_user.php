<?php
  include "m_user.php";

  class c_user {
    public $model;

    function __construct() {
      $this->model = new m_user();
    }

    function getHome($type) {
      if (isset($type)) {
        $_GET['t'] = $type;
      }
      include "home.php";
    }
  }
 ?>
