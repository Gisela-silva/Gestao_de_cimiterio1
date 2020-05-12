<?php

use backend\assets\AdminLteAsset;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */

$asset = \backend\assets\AdminAsset::register($this);
$baseUrl = $asset->baseUrl;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
<!--    <link rel="shortcut icon" href="--><?//= Url::to('@img/app/favicon.ico')?><!--">-->
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?= $this->render('header.php', ['baserUrl' => $baseUrl, 'title'=>Yii::$app->name]) ?>
    <?= $this->render('leftside.php', ['baserUrl' => $baseUrl]) ?>
    <?= $this->render('content.php', ['content' => $content]) ?>
    <?= '' #$this->render('rightside.php', ['baserUrl' => $baseUrl]) ?>
</div>

<footer class="main-footer">
    <strong>YDEV &copy; <?=date('Y')?> </strong>
    <div class="float-right d-none d-sm-inline-block">
        <b>Verção </b> Demo
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
