<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootMatch */

$this->title = 'Create Foot Match';
$this->params['breadcrumbs'][] = ['label' => 'Foot Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
