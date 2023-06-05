<?php

// D - Dependency Inversion Principle (pricípio da inversão da dependência)

interface DBConnection
{
  public function connect();
}

class MysqlConnect  implements DBConnection
{
  public function connect()
  {
  }
}

class OracleConnect  implements DBConnection
{
  public function connect()
  {
  }
}

class UserConnectDAO
{
  private $database;

  public function __construct(DBConnection $dBConnection)
  {
    $this->database = $dBConnection;
  }
}


$dBConnection = new MysqlConnect();

$userDao = new UserConnectDAO($dBConnection);
