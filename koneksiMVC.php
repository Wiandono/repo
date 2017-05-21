<?php
  session_start();
  class connection {
    public $mysqli;

	  public function __construct() {
      $this->mysqli = new mysqli('localhost', 'root', '', 'ojan');
	  }

    public function getConnection() {
      return $this->mysqli;
    }
  }
?>
