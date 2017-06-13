<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootUserFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootUser';
    public $dataFile = '@console/fixtures/data/foot_user.php';
}
