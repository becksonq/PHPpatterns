<?php


namespace app\patterns\command\concept;


class ComplexCommand implements Command
{
    private $_receiver;
    private $_a;
    private $_b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->_receiver = $receiver;
        $this->_a = $a;
        $this->_b = $b;
    }

    public function execute(): void
    {
        echo "<strong>ComplexCommand:</strong> Complex stuff should be done by a receiver object.<br>";
        $this->_receiver->doSomething($this->_a);
        $this->_receiver->doSomethingElse($this->_b);
    }
}