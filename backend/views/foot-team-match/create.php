<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootTeamMatch */

$this->title = 'Create Foot Team Match';
$this->params['breadcrumbs'][] = ['label' => 'Foot Team Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
