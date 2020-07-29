<?php

namespace app\controllers;

use app\patterns\factory\concept\ConceptFactory;
use app\patterns\factory\real\RealFactory;

class FactoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'realModel'    => new RealFactory(),
            'conceptModel' => new ConceptFactory(),
        ]);
    }
}