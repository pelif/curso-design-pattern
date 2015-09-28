<?php
namespace padroes\estruturais\proxy;

class Pdf extends AbstractPdf
{
  public function setPages($pages)
  {
    $this->pages = $pages;
  }

  public function generate()
  {
    print "<b>IMPRIMINDO " .__CLASS__. "</b>";
  }

}
