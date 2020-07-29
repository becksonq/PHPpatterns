<?php


namespace app\patterns\abstract_factory\concept;


interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}