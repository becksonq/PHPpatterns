<?php


namespace app\patterns\singleton\real;


class Config extends Singleton
{
    private $_hashmap = [];

    public function getValue(string $key): string
    {
        return $this->_hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->_hashmap[$key] = $value;
    }
}