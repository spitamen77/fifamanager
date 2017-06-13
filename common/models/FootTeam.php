<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_team".
 *
 * @property integer $userid
 * @property string $name
 * @property integer $overall_points
 * @property double $value
 * @property double $budget
 * @property integer $MW_points
 * @property integer $MW_Rank
 * @property integer $overall_rank
 * @property integer $locale_rank
 *
 * @property FootUser $user
 * @property FootTeamContent[] $footTeamContents
 * @property FootPlayer[] $dr1s
 * @property FootTeamMatch[] $footTeamMatches
 * @property FootPlayerMatch[] $matches
 * @property FootMatch[] $matches0
 */
class FootTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'overall_points', 'MW_points', 'MW_Rank', 'overall_rank', 'locale_rank'], 'integer'],
            [['name', 'overall_points'], 'required'],
            [['value', 'budget'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => FootUser::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'name' => 'Name',
            'overall_points' => 'Overall Points',
            'value' => 'Value',
            'budget' => 'Budget',
            'MW_points' => 'Mw Points',
            'MW_Rank' => 'Mw  Rank',
            'overall_rank' => 'Overall Rank',
            'locale_rank' => 'Locale Rank',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(FootUser::className(), ['id' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents()
    {
        return $this->hasMany(FootTeamContent::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr1s()
    {
        return $this->hasMany(FootPlayer::className(), ['id' => 'dr1'])->viaTable('foot_team_content', ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches()
    {
        return $this->hasMany(FootTeamMatch::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(FootPlayerMatch::className(), ['matchweek_id' => 'match_id'])->viaTable('foot_team_match', ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches0()
    {
        return $this->hasMany(FootMatch::className(), ['id' => 'match_id'])->viaTable('foot_team_match', ['userid' => 'userid']);
    }
}
