<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeam */

$this->title = 'Update Foot Team: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Foot Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'name' => $model->name, 'overall_points' => $model->overall_points]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foot-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
