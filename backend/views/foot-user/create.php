<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootUser */

$this->title = 'Create Foot User';
$this->params['breadcrumbs'][] = ['label' => 'Foot Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
