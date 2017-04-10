<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-4-10
 * Time: 下午4:41
 */

namespace app\controllers;

use yii\web\Controller;

use app\models\Test;

class IndexController extends Controller
{
    public function actionIndex()
    {
//        $model = new Test;
//        $data = $model->find()->all();
//        $this->layout
//        return $this->render("index",array("row"=>null));
        return $this->renderPartial("index",array("row"=>null));
    }
}