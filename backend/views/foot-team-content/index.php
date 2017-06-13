<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootTeamContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Team Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Team Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'userid',
                'value'=>'user.name'
            ],
            ['attribute'=>'dr1',
                'value'=>'dr10.name'
            ],
            ['attribute'=>'dr2',
                'value'=>'dr20.name'
            ],
            ['attribute'=>'him1',
                'value'=>'him10.name'
            ],
            ['attribute'=>'him2',
                'value'=>'him20.name'
            ],
            ['attribute'=>'him3',
                'value'=>'him30.name'
            ],
            // 'him4',
            // 'him5',
            // 'yah1',
            // 'yah2',
            // 'yah3',
            // 'yah4',
            // 'yah5',
            // 'huj1',
            // 'huj2',
            // 'huj3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
