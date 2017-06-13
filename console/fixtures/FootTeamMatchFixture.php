<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootTeamMatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootTeamMatch';
    public $dataFile = '@console/fixtures/data/foot_team_match.php';
}
