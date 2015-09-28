<?php
include_once 'autoload.php';

use padroes\criacao\appfactory\MyUpload;
use padroes\criacao\appfactory\UploadPNG;

$file="";
if(isset($_FILES['imagem']))
{
  $file = $_FILES['imagem'];

  $dados = array(
    'file' => $file,
    'largura' => $_POST['largura'],
    'altura' => $_POST['altura']
  );

  MyUpload::Factory($dados);
}

//$upload = new MyUpload($_FILES);

//echo "<pre>";print_r($_FILES);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Application Factory</title>
  </head>

  <body>

    <form method='post' enctype="multipart/form-data">
      <label>INFORMA A NOVA LARGURA (PX):<br>
      <input type='text' name='largura' size="4" value=''>
      </label>
      <br>

      <label>INFORME A NOVA ALTURA (PX):<br>
      <input type='text' name='altura' size="4" value=''>
      </label>
      <br>

      <label>ENVIE UMA IMAGEM:<br>
      <input type='file' name='imagem' value=''>
      </label>
      <br>

      <input type='submit' value='Fazer Upload'>

    </form>

  </body>

</html>
