<?php
namespace padroes\criacao\appfactory;

class UploadPNG extends MyUpload
{

  public function __construct() { }

  public function loadFile()
  {

    $origem_imagem = self::$file['tmp_name'];

    list($origem_width, $origem_height) = getimagesize($origem_imagem);

    $imagem_saida = imagecreatetruecolor(self::$largura, self::$altura);

    $src_img = imagecreatefrompng($origem_imagem);

    $img = imagecopyresampled($imagem_saida, $src_img, 0, 0, 0, 0, self::$largura, self::$altura, $origem_width, $origem_height);

    header("Content-type: image/png");
    imagepng($img, 'upload.png');
    //imagedestroy($img);

  }

}
