<?php
namespace padroes\comportamentais\iterator;

use padroes\comportamentais\iterator\Laranja;
use ArrayIterator;

class EspremedorComIterator
{
  public static function espremer()
  {
    $laranjas = new ArrayIterator();

    for ($i = 0; $i < 5; $i++)
    {
      $laranjas->append(new Laranja());
    }

    foreach ($laranjas as $laranja)
    {
      $laranja->espremer();
    }
  }
}
