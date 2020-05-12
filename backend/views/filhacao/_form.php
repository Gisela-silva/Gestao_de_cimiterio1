<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Filhacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filhacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_mae')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
