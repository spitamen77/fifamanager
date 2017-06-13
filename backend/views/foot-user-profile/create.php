<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FootUserProfile */

$this->title = 'Create Foot User Profile';
$this->params['breadcrumbs'][] = ['label' => 'Foot User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-user-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
