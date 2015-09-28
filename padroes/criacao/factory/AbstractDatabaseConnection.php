<?php
namespace padroes\criacao\factory;

use padroes\criacao\factory\IDatabaseConnection;

abstract class AbstractDatabaseConnection implements IDatabaseConnection {

  public function __construct(
    $username = null,
    $password = null,
    $dbname = null,
    $host = null,
    $port = null) {

    if ($username && $password && $dbname)
      $this->connect($username, $password, $dbname, $host);
  }

  public function connect($username, $password, $dbname, $host, $port = null)
  {

  }

  public function insert($model){}
  public function update($model){}
  public function delete($model){}
  public function select($criteria)
  {
    return null;
  }

  /**
   *
   * @param array $properties
   * @return IDatabaseConnection
   */
  public static function factory(array $properties)
  {
    foreach($properties as $property => $value)
    {
      $$property = $value;
    }

    $connection = null;

    $className = 'padroes\criacao\\factory\\' . ucwords($adapter) . 'DatabaseConnection';

    try
    {
      $connection = new $className($username, $password, $dbname, $host, $port);
    }
    catch (Exception $e)
    {
      echo $e->getTraceAsString();
    }

    return $connection;
  }


}
