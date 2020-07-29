<?php


namespace app\patterns\factory\real;


use app\patterns\factory\real\LinkedInConnector;
use app\patterns\factory\real\SocialNetworkConnector;
use app\patterns\factory\real\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}