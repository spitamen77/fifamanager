<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootPlayerMatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootPlayerMatch';
    public $dataFile = '@console/fixtures/data/foot_player_match.php';
}
