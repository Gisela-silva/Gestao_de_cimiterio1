<?php

use common\models\User;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = Yii::t('yii', 'Dasboard');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-dasboard">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        <?= Instituicao::find()->count() ?>
                        <span style="border-left: 1px solid white; font-size: 14pt;">
                            <small title="Politécnico" style="margin-left:  10px;" data-toggle="tooltip">
                                <i class="fas fa-school"></i> <?= Instituicao::find()->where(['tipo' => 'Politécnico'])->count(); ?>
                            </small>
                            <small title="Universitário" data-toggle="tooltip" style="margin-left:  5px;">
                                <i class="fas fa-university"></i> <?= Instituicao::find()->where(['tipo' => 'Universitário'])->count(); ?>
                            </small>
                        </span>
                    </h3>
                    <p><?= Yii::t('yii', 'Instituições') ?></p>
                    
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer"><?= Yii::t('yii', 'Mais info') ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= Beneficiario::find()->count() ?></h3>
                    <p><?= Yii::t('yii', 'Beneficiários') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-people"></i>
                </div>
                <a href="#" class="small-box-footer"><?= Yii::t('yii', 'Mais info') ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= User::find()->count() ?></h3>
                    <p><?= Yii::t('yii', 'Utilizadores') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"><?= Yii::t('yii', 'Mais info') ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>35</h3>
                    <p><?= Yii::t('yii', 'Título 2') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer"><?= Yii::t('yii', 'Mais info') ?> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
</div>