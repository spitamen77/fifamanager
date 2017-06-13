<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'matchweek',
            'data_time',
            ['attribute'=>'team1_id',
                'value'=>'team1.club'
            ],
            ['attribute'=>'team2_id',
                'value'=>'team2.club'
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
