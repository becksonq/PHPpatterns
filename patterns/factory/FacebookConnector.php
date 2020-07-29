<?php


namespace app\patterns\factory;


class FacebookConnector implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n" . '<br>';
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n" . '<br>' . '<br>';
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n" . '<br>';
    }
}