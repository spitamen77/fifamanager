<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_match".
 *
 * @property integer $id
 * @property integer $matchweek
 * @property string $data_time
 * @property integer $team1_id
 * @property integer $team2_id
 * @property integer $team1_score
 * @property integer $team2_score
 *
 * @property FootClub $team2
 * @property FootClub $team1
 * @property FootPlayerMatch[] $footPlayerMatches
 * @property FootPlayer[] $players
 * @property FootTeamMatch[] $footTeamMatches
 * @property FootTeam[] $users
 */
class FootMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matchweek', 'team1_id', 'team2_id', 'team1_score', 'team2_score'], 'integer'],
            [['data_time'], 'string', 'max' => 255],
            [['team2_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootClub::className(), 'targetAttribute' => ['team2_id' => 'id']],
            [['team1_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootClub::className(), 'targetAttribute' => ['team1_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matchweek' => 'Tur',
            'data_time' => 'Sana',
            'team1_id' => 'Mezbon',
            'team2_id' => 'Mehmon',
            'team1_score' => 'Natija1',
            'team2_score' => 'Natija2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam2()
    {
        return $this->hasOne(FootClub::className(), ['id' => 'team2_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam1()
    {
        return $this->hasOne(FootClub::className(), ['id' => 'team1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootPlayerMatches()
    {
        return $this->hasMany(FootPlayerMatch::className(), ['matchweek_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(FootPlayer::className(), ['id' => 'player_id'])->viaTable('foot_player_match', ['matchweek_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches()
    {
        return $this->hasMany(FootTeamMatch::className(), ['match_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(FootTeam::className(), ['userid' => 'userid'])->viaTable('foot_team_match', ['match_id' => 'id']);
    }
}
