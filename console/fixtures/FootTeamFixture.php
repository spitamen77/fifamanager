<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootTeamFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootTeam';
    public $dataFile = '@console/fixtures/data/foot_team.php';
}
