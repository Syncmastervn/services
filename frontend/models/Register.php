<?php
namespace frontend\models;

use yii\base\Model;

class Register extends \yii\base\Model
{
    public $userName;
    public $email;
    public $fullName;
    public $province;
    public $district;
    public $ward;
    public $street;
    public $selector;
    public $password;
    public $mobile;
    public $description;
    public $introduce;
    
    public function rules(){
        return [
            [['userName','province','district','ward','street','password'],'required'],
            ['userName','string','min'=>3],
            ['email','email']
        ];
    }
    
    public function attributeLabels() {
        return [
            'userName' => 'Tên đăng nhập',
            'fullName' => 'Tên đầy đủ',
            'selector' => 'Lựa chọn',
            'province' => 'Tỉnh / thành phố',
            'district' => 'Quận / huyện',
            'ward'     => 'Xã / phường'
        ];
    }
}