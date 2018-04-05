<?php
namespace frontend\models;

use yii\base\Model;

class Register extends \yii\base\Model
{
    public $userName;
    public $email;
    public $fullName;
    public $selector;
    
    public function rules(){
        return [
            [['userName'],'required'],
            ['userName','string','min'=>3],
            ['email','email']
        ];
    }
    
    public function attributeLabels() {
        return [
            'userName' => 'Tên đăng nhập',
            'fullName' => 'Tên đầy đủ',
            'selector' => 'Lựa chọn'
        ];
    }
}