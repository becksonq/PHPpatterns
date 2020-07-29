<?php

namespace app\controllers;

class CommandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
