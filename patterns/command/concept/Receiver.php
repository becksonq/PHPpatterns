<?php


namespace app\patterns\command\concept;


class Receiver
{
    public function doSomething(string $a): void
    {
        echo "<strong>Receiver:</strong> Working on (" . $a . ".)<br>";
    }

    public function doSomethingElse(string $b): void
    {
        echo "<strong>Receiver:</strong> Also working on (" . $b . ".)<br>";
    }
}