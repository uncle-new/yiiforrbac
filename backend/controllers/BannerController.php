<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

class BannerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
