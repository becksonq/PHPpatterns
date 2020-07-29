<?php


namespace app\patterns\command\concept;


class Invoker
{
    /** @var Command */
    private $_onStart;
    /** @var Command */
    private $_onFinish;

    public function setOnStart(Command $command): void
    {
        $this->_onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->_onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        echo "<strong>Invoker:</strong> Does anybody want something done before I begin?<br>";
        if ($this->_onStart instanceof Command) {
            $this->_onStart->execute();
        }

        echo "<strong>Invoker:</strong> ...doing something really important...<br><br>";

        echo "<strong>Invoker:</strong> Does anybody want something done after I finish?<br>";
        if ($this->_onFinish instanceof Command) {
            $this->_onFinish->execute();
        }
    }
}