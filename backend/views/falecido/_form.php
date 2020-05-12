<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Falecido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="falecido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_nascimeto')->textInput() ?>

    <?= $form->field($model, 'data_falecimento')->textInput() ?>

    <?= $form->field($model, 'estado_civil')->textInput() ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profissao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIF')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
