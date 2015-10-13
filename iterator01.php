<?php
require_once 'autoload.php';

use padroes\comportamentais\iterator\Espremedor;
use padroes\comportamentais\iterator\EspremedorComIterator;
use padroes\comportamentais\iterator\EspremedorComMeuIterator;


print "Espremedor: \n";
Espremedor::espremer();
print "---------------------------------------------------------------------\n";

print "EspremedorComIterator: \n";
EspremedorComIterator::espremer();
print "---------------------------------------------------------------------\n";

print "EspremedorComMeuIterator: \n";
EspremedorComMeuIterator::espremer();
print "---------------------------------------------------------------------\n";
