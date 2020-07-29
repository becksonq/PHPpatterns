<?php


namespace app\patterns\factory\concept;


class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1;
    }
}