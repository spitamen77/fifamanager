<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootUserProfileFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootUserProfile';
    public $dataFile = '@console/fixtures/data/foot_user_profile.php';
}
