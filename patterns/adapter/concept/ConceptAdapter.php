<?php


namespace app\patterns\adapter\concept;


class ConceptAdapter
{
    public function clientCode(Target $target)
    {
        echo $target->request();
    }
}