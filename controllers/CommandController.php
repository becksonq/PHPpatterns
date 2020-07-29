<?php

namespace app\controllers;

use app\patterns\command\concept\ConceptCommand;
use app\patterns\command\real\RealCommand;

class CommandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'realModel'    => new RealCommand(),
        ]);
    }

}
