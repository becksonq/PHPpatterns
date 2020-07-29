<?php


namespace app\patterns\abstract_factory\concept;


class Factory
{
    public function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "<br>";
        echo $productB->anotherUsefulFunctionB($productA) . "<br>";
    }
}