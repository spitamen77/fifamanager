<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootTeamContentFixture extends ActiveFixture
{
    public $modelClass = 'common\models\FootTeamContent';
    public $dataFile = '@console/fixtures/data/foot_team_content.php';
}
