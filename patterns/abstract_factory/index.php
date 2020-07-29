<?php

use abstract_factory\Page;
use abstract_factory\PHPTemplateFactory;
use abstract_factory\TwigTemplateFactory;

require 'Page.php';
require 'PHPTemplateFactory.php';
require 'TwigTemplateFactory.php';
//require_once '../vendor/autoload.php';

$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory);

// Можете убрать комментарии, если у вас установлен Twig.

// echo "Testing rendering with the Twig factory:\n";
// echo $page->render(new TwigTemplateFactory);
