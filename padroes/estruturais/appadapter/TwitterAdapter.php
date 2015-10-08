<?php
namespace padroes\estruturais\appadapter;

use padroes\estruturais\appadapter\SocialAdapter as SocialAdapter;
//use padroes\estruturais\appadapter\Twitter as Twitter;

class TwitterAdapter implements SocialAdapter
{
    private $twitter;

    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    public function sendMsg($messenger)
    {
        $this->twitter->sendMsg($messenger);
    }
}


 ?>
