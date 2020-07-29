<?php


namespace app\patterns\adapter\concept;


class Target
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}