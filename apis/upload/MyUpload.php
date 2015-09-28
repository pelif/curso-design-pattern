<?php
namespace padroes\criacao\appfactory;

use padroes\criacao\appfactory\IMyUpload;

abstract class MyUpload implements IMyUpload
{
  protected $file = null;

  public function __construct($file)
  {
      $this->file = $file;

      echo "<pre>";print_r($this->file);

  }

  public function validateData()
  {
      if(!is_file($this->file))
      {
        throw new Exception('Arquivo não foi enviado!!');
      }

      if($this->file['size'] > 2048) {
          throw new Exception('O arquivo enviado tem '.$this->file['size']. ' por favor envie um arquivo menor que 2MB.');
      }



  }


}
