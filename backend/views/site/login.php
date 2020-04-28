<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=Url::to(['site/login'])?>">Cimiterio</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?=Yii::t('yii', 'Faça login para iniciar sua sessão')?></p>

                <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'username', ['template' => '
                        <div class="input-group mb-3">
                            {input}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>{error}{hint}
                        </div>'])->textInput(['autofocus' => true])->input('text', ['placeholder'=> Yii::t('yii', 'Nome de utilizador'), 'class'=>'form-control']) ?>

                    <?= $form->field($model, 'password', ['template' => '
                        <div class="input-group mb-3">
                            {input}
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>{error}{hint}
                        </div>'])->passwordInput()->input('password', ['placeholder'=>Yii::t('yii', 'Palavra-passe'), 'class'=>'form-control'])?>
                    <div class="row">
                        <div class="col-8">
                            <?= $form->field($model, 'rememberMe')->checkbox()?>
                        </div>
                        <div class="col-4">
                            <?= Html::submitButton('<i class="fas fa-sign-in-alt"></i> '.Yii::t('yii', 'Entrar'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
                <p class="mb-1">
                    <a href="http://localhost/samb/frontend/web/index.php/portal/request-password-reset" target="_blank">Esqueceu sua palavra-passe ?</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJs(
    "    
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-red',
            increaseArea: '10%' // optional
        });
    });",
    \yii\web\View::POS_READY
);
?>