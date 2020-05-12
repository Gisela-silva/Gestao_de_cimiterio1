<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Filhacao */

$this->title = 'Update Filhacao: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Filhacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filhacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
