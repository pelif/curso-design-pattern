<?php

include_once 'autoload.php';

use padroes\estruturais\proxy\AbstractPdf;
use padroes\estruturais\proxy\PdfProxy;

$pdf = new PdfProxy();
$pdf->generate();


 ?>
