<?php


namespace app\patterns\factory\concept;


class ConceptFactory
{
    public function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.<br>"
            . $creator->someOperation();
        // ...
    }
}