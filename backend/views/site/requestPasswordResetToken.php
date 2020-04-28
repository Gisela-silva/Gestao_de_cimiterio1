<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;

$this->title = Yii::t('yii', 'Solicitar redefinição da palavra-passe');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=Url::to(['site/login'])?>"><b>Admin</b>SAMB</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?=Yii::t('yii', 'You forgot your password? Here you can easily retrieve a new password.')?></p>

                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                    <?= $form->field($model, 'email', ['template' => '
                        <div class="input-group mb-3">
                            {input}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>{error}{hint}
                        </div>'])->textInput(['autofocus' => true])->input('text', ['placeholder'=> Yii::t('yii', 'Email'), 'class'=>'form-control']) ?>
                    <div class="row">
                        <div class="col-12">
                            <?= Html::submitButton(Yii::t('yii', 'Solicitar nova palavra-passe'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
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