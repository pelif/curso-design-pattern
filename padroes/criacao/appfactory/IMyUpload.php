<?php
namespace padroes\criacao\appfactory;

interface IMyUpload
{
  public function __construct();
  public static function validateData();
  public function loadFile();

}

 ?>
