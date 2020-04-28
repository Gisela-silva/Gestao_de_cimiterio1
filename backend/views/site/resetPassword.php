<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Redefinir Palavra-passe';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=Url::to(['site/login'])?>"><b>Admin</b>SAMB</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?=Yii::t('yii', 'You are only one step a way from your new password, recover your password now.')?></p>

                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                    <?= $form->field($model, 'password', ['template' => '
                        <div class="input-group mb-3">
                            {input}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>{error}{hint}
                        </div>'])->passwordInput()->input('password', ['placeholder'=>Yii::t('yii', 'Palavra-passe'), 'class'=>'form-control'])?>

                    <?= $form->field($model, 'confirm_password', ['template' => '
                        <div class="input-group mb-3">
                            {input}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>{error}{hint}
                        </div>'])->passwordInput()->input('password', ['placeholder'=>Yii::t('yii', 'Confirmar Palavra-passe'), 'class'=>'form-control'])?>
                    <div class="row">
                        <div class="col-12">
                            <?= Html::submitButton(Yii::t('yii', 'Alterar palavra-passe'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>

                <p class="mt-3 mb-1">
                <?=Html::a(Yii::t('yii', 'Entrar'), ['site/login'])?>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>