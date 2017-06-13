<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootPlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Player', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'club_id',
                'value'=>'club.club',
                //'filter'=>Category::getParentList(),
                
            ],
            'name',
            ['attribute'=>'position',
              'value'=>'position0.abbr'  
            ],
            'price',
            // 'selected',
            // 'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
