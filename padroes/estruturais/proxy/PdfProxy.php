<?php
namespace padroes\estruturais\proxy;

use padroes\estruturais\proxy\Pdf;

class PdfProxy extends AbstractPdf
{
  public function generate()
  {
    $pdf = new Pdf();
    $pdf->setPages($this->pages);
    $pdf->generate();
  }
}
