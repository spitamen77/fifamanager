<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootPositionFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootPosition';
    public $dataFile = '@console/fixtures/data/foot_position.php';
}
