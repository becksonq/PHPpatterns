<?php


namespace app\patterns\abstract_factory\concept;


class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}