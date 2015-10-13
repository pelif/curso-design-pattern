<?php

namespace padroes\estruturais\appadapter;

//use padroes\estruturais\appadapter\Facebook;

class FacebookAdapter implements SocialAdapter
{
    private $face;

    public function __construct(Facebook $face)
    {
        $this->face = $face;
    }

    public function sendMsg($messenger)
    {
        $this->face->sendMsg($messenger);
    }

}



?>
