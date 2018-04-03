<?php

/* @var $this yii\web\View */
    $this->registerJsFile(Yii::getAlias('@web').'/frontend/web/plugins/bxslider/jquery.bxslider.min.js',['depends' => 'yii\web\JqueryAsset']);
    $this->registerJsFile(Yii::getAlias('@web').'/frontend/web/js/category.js',['depends' => 'yii\web\JqueryAsset']);
    //$this->registerCssFile(Yii::getAlias('@web').'/css/jquery.fancybox.min.css',['depends' => 'yii\web\JqueryAsset']);
?>