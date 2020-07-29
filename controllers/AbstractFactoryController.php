<?php

namespace app\controllers;

use app\patterns\abstract_factory\concept\Factory;

class AbstractFactoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => new Factory(),
        ]);
    }

}
