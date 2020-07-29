<?php


namespace app\patterns\abstract_factory\real;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h5>{{ title }}</h5>";
    }
}