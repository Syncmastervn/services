<?php
namespace frontend\models;

use yii\base\Model;

class Createads extends \yii\base\Model
{
    public $header;
    public $brief_content;
    public $content;
    public $province;
    public $district;
    public $ward;
    public $street;
    public $street_num;
    public $price;
    public $discount;
    public $discount_details;
    
    public function rules()
    {
        return [
            [['header','content',],'required']
        ];
    }
    
    public function attributeLabels() {
        return [
            'header'        => 'Tiêu đề',
            'brief_content' => 'Nội dung rút gọn',
            'content'       => 'Nội dung',
            'province'      => 'Tỉnh/Thành phố',
            'district'      => 'Huyện/Thị',
            'ward'          => 'Xã/Phường',
            'street_num'    => 'Số nhà',
            'street'        => 'Tên đường',
            'price'         => 'Trị giá',
            'discount'      => 'Giảm giá',
            'discount_details'  => 'Thông tin giảm giá'
        ];
    }
}
    



