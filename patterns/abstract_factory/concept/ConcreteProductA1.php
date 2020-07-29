<?php


namespace app\patterns\abstract_factory\concept;


class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}