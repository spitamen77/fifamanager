<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootPlayerMatch */

$this->title = 'Create Foot Player Match';
$this->params['breadcrumbs'][] = ['label' => 'Foot Player Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-player-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
