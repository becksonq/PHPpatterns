<?php


namespace app\patterns\command\concept;


interface Command
{
    public function execute(): void;
}