<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootClubFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootClub';
    public $dataFile = '@console/fixtures/data/foot_club.php';
}
