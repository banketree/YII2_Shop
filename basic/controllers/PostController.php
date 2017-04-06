<?php

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
      //  echo "test";
    }

}
