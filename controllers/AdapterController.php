<?php

namespace app\controllers;

use app\patterns\adapter\concept\ConceptAdapter;

class AdapterController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => new ConceptAdapter(),
        ]);
    }

}
