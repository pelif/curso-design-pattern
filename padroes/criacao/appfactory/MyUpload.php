<?php
namespace padroes\criacao\appfactory;

use padroes\criacao\appfactory\IMyUpload;
use Exception;

abstract class MyUpload implements IMyUpload
{
  protected static $file = array();
  protected static $largura, $altura;

  public function __construct() { }

  public static function validateData()
  {

      if(!is_file(self::$file['tmp_name']))
      {
        throw new Exception('Arquivo não foi enviado!!');
      }

      if(self::$file['size'] > 2000000) {
          throw new Exception('O arquivo enviado tem '.self::$file['size']. ' por favor envie um arquivo menor que 2MB.');
      }

  }


  public function loadFile() { }


  public static function Factory(array $dados)
  {
      self::$file = $dados['file'];
      self::$largura = $dados['largura'];
      self::$altura = $dados['altura'];

      self::validateData();

      foreach(self::$file as $property => $value)
      {
          $$property = $value;
      }

      $obj = null;
      $pos = '';

      if(substr($type, -3) == 'peg' || substr($type, -3) == 'PEG')
      {
        $pos = "jpeg";
      }
      else
      {
        $pos = substr($type, -3);
      }

      $className = 'padroes\criacao\\appfactory\\Upload' . strtoupper($pos);

      try {
        $obj = new $className();
        $obj->loadFile();
      } catch (Exception $e) {
        echo $e->getTraceAsString();
      }
  }



}
