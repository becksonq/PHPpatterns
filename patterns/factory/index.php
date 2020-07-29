<?php
require 'FacebookPoster.php';
require 'LinkedInPoster.php';

use factory\FacebookPoster;
use factory\LinkedInPoster;
use factory\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * На этапе инициализации приложение может выбрать, с какой социальной сетью оно
 * хочет работать, создать объект соответствующего подкласса и передать его
 * клиентскому коду.
 */
echo "<strong>Testing ConcreteCreator1:</strong>" . '<br><br>';
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n" . '<br>';

echo "<strong>Testing ConcreteCreator2:</strong>" . '<br><br>';
clientCode(new LinkedInPoster("john_smith@example.com", "******"));