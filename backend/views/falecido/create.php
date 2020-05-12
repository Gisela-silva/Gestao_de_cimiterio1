<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Falecido */

$this->title = 'Create Falecido';
$this->params['breadcrumbs'][] = ['label' => 'Falecidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falecido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
