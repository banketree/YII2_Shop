<?php

namespace app\modules\admin;

use yii\web\Controller;
use app\modules\admin\CommonController;

class DefaultController extends CommonController
{
    public function actionIndex()
    {
        $this->layout = "layout1";
        return $this->render('index');
    }
}
