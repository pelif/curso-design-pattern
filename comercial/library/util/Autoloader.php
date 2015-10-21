<?php
namespace library\util;

class Autoloader
{
  private static $instance;

/*  private function __construct(){
    spl_autoload_register(array($this,'autoload'));
  }
*/

  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function autoload($class)
  {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    print "Chegou aqui no metodo autoload"; die();
    require $class . '.php';
  }
}
