<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootPlayerFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootPlayer';
    public $dataFile = '@console/fixtures/data/foot_player.php';
}
