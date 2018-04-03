<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\web\UploadedFile;
use Imagine\Image\Box;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;

use Yii;

class UploadController extends \yii\base\Controller
{
//
//    public function behaviors() 
//    {
//        return ArrayHelper::merge(parent::behaviors(), [
//        'authenticator' => [
//        'class' => QueryParamAuth::className(),
//        ],
//        ]);
//    }


    public $documentPath = 'documents/';

//    public function verbs()
//    {
//        $verbs = parent::verbs();
//        $verbs[ "upload" ] = ['POST' ];
//        return [
//        'upload' => ['POST', 'PUT']
//        ];
//        return $verbs;
//    }

    public function actionIndex() {
        return $this->render('index', []);
        $fileName = 'file';
        $uploadPath = Yii::getAlias('@app') . '/../' . 'upload/';

        $path = "upload/";

        $postData = \Yii::$app->request->post();
        if (Yii::$app->request->isPost && isset($_FILES[$fileName])) {
            $file = \yii\web\UploadedFile::getInstanceByName($fileName);
            $uniqid = uniqid();
            $fileName = $uniqid . '.' . $file->extension;

            if ($file->saveAs($uploadPath . $fileName)) {
                \yii\imagine\Image::thumbnail($uploadPath . $fileName, 120, 120)
                ->save($uploadPath . 'thumb_120x120/' . $fileName, ['quality' => 80]);
                
                \yii\imagine\Image::getImagine()
                ->open($uploadPath . $fileName)
                ->thumbnail(new Box(800, 800))
                ->save($uploadPath . '800x800/' . $fileName, ['quality' => 80]);
                
                $image = new Image;
                $image->url = $path . $fileName;
                $image->timestamp = time();
                $image->th120 = $path . 'thumb_120x120/' . $fileName;
                $image->rz800 = $path . '800x800/' . $fileName;

                $image->save();

                $categoryImage = new CategoryImage;
                $categoryImage->ImagecategoryId = $ImageCategoryId;
                $categoryImage->imageId = $image->id;
                $categoryImage->save();
                return $image;
            }
        }
    }
}