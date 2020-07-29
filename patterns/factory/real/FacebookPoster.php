<?php

namespace app\patterns\factory\real;


use app\patterns\factory\real\FacebookConnector;
use app\patterns\factory\real\SocialNetworkConnector;
use app\patterns\factory\real\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}