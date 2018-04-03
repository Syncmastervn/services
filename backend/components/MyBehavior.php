<?php
namespace app\components;

use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $userName = "Behavior UserName";
    public $email = "Behavior Email";
    
    public function foo(){
        echo "Behaivor Foo()";
    }
}