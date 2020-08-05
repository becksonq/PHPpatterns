<?php


namespace app\patterns\singleton\real;


class Logger extends Singleton
{
    private $_fileHandle;

    protected function __construct()
    {
        parent::__construct();
//        $this->fileHandle = fopen('php://stdout', 'w');
        $this->_fileHandle = fopen(__DIR__ . '/data.txt', 'w');
    }

    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->_fileHandle, "$date: $message\n");
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}