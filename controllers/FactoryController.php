<?php

namespace app\controllers;

use app\patterns\factory\Factory;

class FactoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => new Factory(),
        ]);
    }
}