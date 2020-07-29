<?php

use app\patterns\factory\real\FacebookPoster;
use app\patterns\factory\real\LinkedInPoster;
use app\patterns\factory\concept\ConcreteCreator1;
use app\patterns\factory\concept\ConcreteCreator2;

/* @var $this yii\web\View
 * @var $realModel \app\patterns\factory\real\RealFactory
 * @var $conceptModel \app\patterns\factory\concept\ConceptFactory
 */
?>

  <h5>App: Launched with the ConcreteCreator1.</h5>
<?= $conceptModel->clientCode(new ConcreteCreator1()) ?>
  <br>
  <br>

  <h5>App: Launched with the ConcreteCreator2.</h5>
<?= $conceptModel->clientCode(new ConcreteCreator2) ?>
  <br>
  <br>
  <hr>

  <strong>Testing ConcreteCreator1:</strong> <br><br>
<?= $realModel->clientCode(new FacebookPoster("john_smith", "******")) ?>
  <br>

  <strong>Testing ConcreteCreator2:</strong><br><br>
<?= $realModel->clientCode(new LinkedInPoster("john_smith@example.com", "******")) ?>