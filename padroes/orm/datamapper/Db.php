<?php
namespace padroes\orm\datamapper;

class Db extends \PDO
{
  public static function getInstance()
  {
    $config = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'config.ini');
    $dsn = $config['dsn'];
    $username = $config['user'];
    $passwd = $config['passwd'];
    return new Db($dsn, $username, $passwd, null);
  }
}
