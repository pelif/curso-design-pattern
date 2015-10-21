<?php
require_once 'autoload.php';

use padroes\basicos\registry\ClasseA;
use padroes\basicos\registry\ClasseB;

$a = new ClasseA();
$b = new ClasseB();

$a->relateOQueFez();
$b->relateOQueFez();
