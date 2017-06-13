<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootClub */

$this->title = 'Create Foot Club';
$this->params['breadcrumbs'][] = ['label' => 'Foot Clubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-club-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
