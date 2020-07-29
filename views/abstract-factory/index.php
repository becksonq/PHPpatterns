<?php
/* @var $this yii\web\View
 * @var $model \app\patterns\abstract_factory\concept\Factory
 */

$page = new \app\patterns\abstract_factory\real\Page('Sample page', 'This it the body.');
?>

Testing actual rendering with the PHPTemplate factory:<br>
<?= $page->render(new \app\patterns\abstract_factory\real\PHPTemplateFactory()) ?>

<!-- Можете убрать комментарии, если у вас установлен Twig. -->

Testing rendering with the Twig factory:
<?= $page->render(new \app\patterns\abstract_factory\real\TwigTemplateFactory()) ?>

<hr>
<h5>Client: Testing client code with the first factory type:</h5>
<?= $model->clientCode(new \app\patterns\abstract_factory\concept\ConcreteFactory1()); ?>
<br>
<h5>Client: Testing the same client code with the second factory type:</h5>
<?= $model->clientCode(new \app\patterns\abstract_factory\concept\ConcreteFactory2()); ?>
