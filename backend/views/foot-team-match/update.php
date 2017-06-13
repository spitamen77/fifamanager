<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeamMatch */

$this->title = 'Update Foot Team Match: ' . $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Foot Team Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userid, 'url' => ['view', 'userid' => $model->userid, 'match_id' => $model->match_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foot-team-match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
