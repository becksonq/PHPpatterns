<?php

use app\patterns\factory\FacebookPoster;
use app\patterns\factory\LinkedInPoster;

/* @var $this yii\web\View
 * @var $model app\patterns\factory\Factory
 */
?>

  <strong>Testing ConcreteCreator1:</strong> <br><br>
<?= $model->clientCode(new FacebookPoster("john_smith", "******")) ?>
  <br>

  <strong>Testing ConcreteCreator2:</strong><br><br>
<?= $model->clientCode(new LinkedInPoster("john_smith@example.com", "******")) ?>