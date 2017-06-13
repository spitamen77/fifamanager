<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootTeam */

$this->title = 'Create Foot Team';
$this->params['breadcrumbs'][] = ['label' => 'Foot Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
