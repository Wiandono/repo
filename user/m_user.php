<?php
  include "../koneksiMVC.php";

  class m_user {
    public $hasil = array();
    public $mysqli;

    public function __construct() {
      $this->mysqli = new connection();
    }

    
  }
 ?>
