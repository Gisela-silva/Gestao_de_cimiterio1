<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FalecidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Falecidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falecido-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Falecido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'sexo',
            'data_nascimeto',
            'data_falecimento',
            //'estado_civil',
            //'foto',
            //'profissao',
            //'NIF',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
