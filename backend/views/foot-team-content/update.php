<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeamContent */

$this->title = 'Update Foot Team Content: ' . $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Foot Team Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userid, 'url' => ['view', 'userid' => $model->userid, 'dr1' => $model->dr1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foot-team-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
