<?php

namespace backend\controllers;

use yii\web\Controller;

class HelloController extends Controller //hello is the controller id
{
    public function actionIndex()
    {
//        return "Hello world!"; //render simple text
        # Rendering a view
        return $this->render('index');
    }

}