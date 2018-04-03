<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en" dir="ltr">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/icon/apple-touch-icon-144-precomposed.png'?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/icon/apple-touch-icon-114-precomposed.png'?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/icon/apple-touch-icon-72-precomposed.png'?>">
            <link rel="apple-touch-icon-precomposed" href="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/icon/apple-touch-icon-57-precomposed.png'?>">
                <link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/icon/favicon.png'?>">
    <title>vichothue.com</title>
    <!-- Bootstrap core CSS -->
    <!-- 
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">


    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">


        <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>
-->
    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>

    <script src="http://<?php echo $_SERVER['SERVER_NAME'] . '/services/frontend/web/js/pace.min.js'?>"></script>
     <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<div id="wrapper">
<?= $content ?>
</div>
<!-- /.wrapper -->


<!-- Modal Change City -->

<!-- /.modal -->


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<!--
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/vendors.min.js"></script>


<script src="assets/js/script.js"></script>





<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>

<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>
-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
