<?php


namespace app\patterns\factory;


class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n" . '<br>';
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n" . '<br>' . '<br>';
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n" . '<br>';
    }
}