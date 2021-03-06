<?php

use backend\assets\AdminLteAsset;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="JDeveloper-CV"/>
    <link rel="shortcut icon" href="<?=''#Url::to('@img/app/favicon.ico')?>">
    <?php $this->head() ?>
</head>
<body class="hold-transition login-page">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
