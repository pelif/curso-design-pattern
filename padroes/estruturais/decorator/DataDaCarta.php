<?php
namespace padroes\estruturais\decorator;
use DateTime;

class DataDaCarta implements ICarta
{
  public function montar()
  {
    $data = new DateTime();
    echo '<b>Data : </b>' . date('d/m/Y') . '<br><br><hr>';
  }
}
