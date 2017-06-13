<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FootMatch */

$this->title = 'Update Foot Match: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Foot Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foot-match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
