<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ward".
 *
 * @property int $id
 * @property string $name
 * @property int $districtId
 */
class Ward extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ward';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['districtId'], 'required'],
            [['districtId'], 'integer'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'districtId' => 'District ID',
        ];
    }
}
