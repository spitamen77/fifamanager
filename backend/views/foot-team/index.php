<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootTeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userid',
            'name',
            'overall_points',
            'value',
            'budget',
            // 'MW_points',
            // 'MW_Rank',
            // 'overall_rank',
            // 'locale_rank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
