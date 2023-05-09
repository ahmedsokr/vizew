<?php

class DBController
{
  private $dbHost = "localhost";
  private $dbUser = "root";
  private $dbPassword = "";
  private $dbName = "vizew";
  private $connection;

  public function openConnection()
  {
    $this->connection = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
    if ($this->connection->connect_errno) {
      echo "Error in Connection : " . $this->connection->connect_errno;
      return false;
    } else {
      return true;
    }
  }

  public function closeConnection()
  {
    if ($this->connection) {
      $this->connection->close();
    }
  }
}
