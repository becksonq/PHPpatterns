<?php


namespace app\patterns\command\concept;


class SimpleCommand implements Command
{
    private $_payload;

    public function __construct(string $payload)
    {
        $this->_payload = $payload;
    }

    public function execute(): void
    {
        echo "<strong>SimpleCommand:</strong> See, I can do simple things like printing (" . $this->_payload . ")<br>";
    }
}