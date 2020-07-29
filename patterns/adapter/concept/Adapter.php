<?php


namespace app\patterns\adapter\concept;


class Adapter extends Target
{
    private $_adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->_adaptee = $adaptee;
    }

    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->_adaptee->specificRequest());
    }
}