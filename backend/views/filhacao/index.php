<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FilhacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filhacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filhacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Filhacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome_pai',
            'nome_mae',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
