<?php

namespace app\controllers;

use app\patterns\factory\concept\ConceptFactory;
use app\patterns\factory\real\Factory;

class FactoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'realModel'    => new Factory(),
            'conceptModel' => new ConceptFactory(),
        ]);
    }
}