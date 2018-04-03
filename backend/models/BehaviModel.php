<?php
namespace backend\models;

use yii\base\Model;
use app\components\MyBehavior;

class BehaviModel extends Model
{
    public $name = "Model Name";
    
    public function behaviors(){
        return[
            [
                'class' => MyBehavior::className()
            ]
        ];
    }
}