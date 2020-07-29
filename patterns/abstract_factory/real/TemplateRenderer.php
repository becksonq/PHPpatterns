<?php


namespace app\patterns\abstract_factory\real;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}