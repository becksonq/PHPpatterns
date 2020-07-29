<?php
/* @var $this yii\web\View */

$page = new \app\patterns\abstract_factory\real\Page('Sample page', 'This it the body.');
?>

Testing actual rendering with the PHPTemplate factory:<br>
<?= $page->render(new \app\patterns\abstract_factory\real\PHPTemplateFactory()) ?>

<!-- Можете убрать комментарии, если у вас установлен Twig. -->

Testing rendering with the Twig factory:
<?= $page->render(new \app\patterns\abstract_factory\real\TwigTemplateFactory()) ?>
