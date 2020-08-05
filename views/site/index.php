<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Test PHP patterns';
?>
<div class="site-index">
  <div class="body-content">
    <div class="row">
      <div class="col-lg-12">
        <h1>Patterns test</h1>

          <?= Html::a('Factory', Url::toRoute(['/factory/index']), [
              'class' => 'btn btn-outline-secondary',
          ]) ?>
          <?= Html::a('Abstract Factory', Url::toRoute(['/abstract-factory/index']), [
              'class' => 'btn btn-outline-secondary',
          ]) ?>
          <?= Html::a('Command', Url::toRoute(['/command/index']), [
              'class' => 'btn btn-outline-secondary',
          ]) ?>
          <?= Html::a('Adapter', Url::toRoute(['/adapter/index']), [
              'class' => 'btn btn-outline-secondary',
          ]) ?>
          <?= Html::a('Singleton', Url::toRoute(['/singleton/index']), [
              'class' => 'btn btn-outline-secondary',
          ]) ?>

        <hr>
      </div>
    </div>

  </div>
</div>
