<?php


namespace abstract_factory;

require 'TemplateFactory.php';
require 'PHPTemplatePageTemplate.php';
require 'PHPTemplateTitleTemplate.php';
require 'PHPTemplateRenderer.php';

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate;
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}