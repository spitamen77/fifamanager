<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'phone',
            'password',
            'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
