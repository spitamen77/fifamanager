<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FootTeamContent */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Foot Team Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foot-team-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'userid' => $model->userid, 'dr1' => $model->dr1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'userid' => $model->userid, 'dr1' => $model->dr1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user.name',
            ['attribute'=>'dr10.name',
                'label'=>'dr1'
            ],
            ['attribute'=>'dr20.name',
                'label'=>'dr2'
            ],
            ['attribute'=>'him10.name',
                'label'=>'him1'
            ],
            ['attribute'=>'him20.name',
                'label'=>'him2'
            ],
            ['attribute'=>'him30.name',
                'label'=>'him3'
            ],
            ['attribute'=>'him40.name',
                'label'=>'him4'
            ],
            ['attribute'=>'him50.name',
                'label'=>'him5'
            ],
            ['attribute'=>'yah10.name',
                'label'=>'yah1'
            ],
            ['attribute'=>'yah20.name',
                'label'=>'yah2'
            ],
            ['attribute'=>'yah30.name',
                'label'=>'yah3'
            ],
            ['attribute'=>'yah40.name',
                'label'=>'yah4'
            ],
            ['attribute'=>'yah50.name',
                'label'=>'yah5'
            ],
            ['attribute'=>'huj10.name',
                'label'=>'huj1'
            ],
            ['attribute'=>'huj20.name',
                'label'=>'huj2'
            ],
            ['attribute'=>'huj30.name',
                'label'=>'huj3'
            ],
        ],
    ]) ?>

</div>
