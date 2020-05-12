<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Filhacao */

$this->title = 'Create Filhacao';
$this->params['breadcrumbs'][] = ['label' => 'Filhacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filhacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
