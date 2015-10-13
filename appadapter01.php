<?php

require_once "./autoload.php";

use padroes\estruturais\appadapter\TwitterAdapter as TAdapter;
use padroes\estruturais\appadapter\Twitter;
use padroes\estruturais\appadapter\FacebookAdapter as FAdapter;
use padroes\estruturais\appadapter\Facebook;

$tw = new TAdapter(new Twitter());
$tw->sendMsg("Messenger of test to Api Twitter!!!<hr>");

$face = new FAdapter(new Facebook());
$face->sendMsg("Messenger of test to Api Facebook!!!");

 ?>
