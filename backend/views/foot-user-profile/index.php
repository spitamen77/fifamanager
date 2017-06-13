<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FootUserProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foot User Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-user-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Foot User Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userid',
            'fname',
            'lname',
            'sex',
            'birthday',
            // 'email:email',
            // 'f_club',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
