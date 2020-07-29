<?php


namespace app\patterns\abstract_factory\real;

interface PageTemplate
{
    public function getTemplateString(): string;
}