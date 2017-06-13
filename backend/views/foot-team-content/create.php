<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootTeamContent */

$this->title = 'Create Foot Team Content';
$this->params['breadcrumbs'][] = ['label' => 'Foot Team Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
