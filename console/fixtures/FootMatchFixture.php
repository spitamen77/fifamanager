<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootMatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootMatch';
    public $dataFile = '@console/fixtures/data/foot_match.php';
}
