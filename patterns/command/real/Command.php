<?php


namespace app\patterns\command\real;


interface Command
{
    public function execute(): void;

    public function getId(): int;

    public function getStatus(): int;
}