<?php
class Database {
	private $_connection;
	private static $_instance;

  function __construct() {
      try {
  $this->_connection = new PDO("mysql:host=localhost;dbname=football;charset=utf8", "root", "");

    } catch (PdoException $e) {
          echo 'Alert!: '.$e->getMessage();
      }
  }

	public static function getInstance() {
		if(!self::$_instance) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function getConnection() {
		return $this->_connection;


	}
}
?>
