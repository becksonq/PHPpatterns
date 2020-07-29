<?php


namespace abstract_factory;


interface PageTemplate
{
    public function getTemplateString(): string;
}