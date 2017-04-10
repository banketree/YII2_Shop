<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-4-10
 * Time: 下午4:36
 */

namespace app\models;


use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return "mytest";
    }
}