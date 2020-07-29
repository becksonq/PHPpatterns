<?php
/* @var $this yii\web\View
 * @var $model \app\patterns\adapter\concept\ConceptAdapter
 */
?>

<h3>Pattern "Adapter"</h3>

  <p><strong>Client:</strong> I can work just fine with the Target objects:</p>
<?php
$target = new \app\patterns\adapter\concept\Target();
$model->clientCode($target);
?>
<br><br>

<?php $adaptee = new \app\patterns\adapter\concept\Adaptee(); ?>
<p>Client: The Adaptee class has a weird interface. See, I don't understand it:</p>
<?= "<strong>Adaptee:</strong> " . $adaptee->specificRequest() ?>
<br><br>

  <p><strong>Client:</strong> But I can work with it via the Adapter:</p>
<?php
$adapter = new \app\patterns\adapter\concept\Adapter($adaptee);
$model->clientCode($adapter);
?>