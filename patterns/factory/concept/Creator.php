<?php


namespace app\patterns\factory\concept;


abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        // Вызываем фабричный метод, чтобы получить объект-продукт.
        $product = $this->factoryMethod();
        // Далее, работаем с этим продуктом.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}