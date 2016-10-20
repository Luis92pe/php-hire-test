<?php

/**
 * Class para base de datos
 */
class DB {
  
  private $host = "localhost";
  private $dbname = "test";
  private $user = "root";
  private $pass = "";

  public $conn;

  /**
   * Método para la conexion a la base de datos 
   * @return [type] [description]
   */
  public function connect(){
    try {
      $this->conn = new PDO('mysql: host='.$this->host.';dbname='.$this->dbname.'', $this->user, $this->pass);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "ERROR: " . $e->getMessage();

    }
  }

  public function disconnect(){
    $this->conn = null;
  }


}