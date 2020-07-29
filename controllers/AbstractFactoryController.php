<?php

namespace app\controllers;

class AbstractFactoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
