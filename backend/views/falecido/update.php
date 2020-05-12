<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Falecido */

$this->title = 'Update Falecido: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Falecidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="falecido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
