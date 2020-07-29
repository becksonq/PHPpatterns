<?php


namespace app\patterns\abstract_factory\real;

class TwigRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new \Twig\Loader\ArrayLoader([
            'index' => $templateString,
        ]);
        $twig = new \Twig\Environment($loader);

        return $twig->render('index', $arguments);
    }
}