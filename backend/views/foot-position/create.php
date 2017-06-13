<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootPosition */

$this->title = 'Create Foot Position';
$this->params['breadcrumbs'][] = ['label' => 'Foot Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
