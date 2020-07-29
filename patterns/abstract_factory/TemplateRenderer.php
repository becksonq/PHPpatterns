<?php


namespace abstract_factory;


interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}