<?php


namespace app\patterns\factory\real;


use app\patterns\factory\real\SocialNetworkPoster;

class Factory
{
    public function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
//        $creator->post("I had a large hamburger this morning!");
        // ...
    }
}