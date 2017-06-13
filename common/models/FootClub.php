<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_club".
 *
 * @property integer $id
 * @property integer $rank
 * @property string $club
 * @property string $abbr
 * @property integer $played
 * @property integer $points
 *
 * @property FootMatch[] $footMatches
 * @property FootMatch[] $footMatches0
 * @property FootPlayer[] $footPlayers
 */
class FootClub extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_club';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rank', 'club', 'abbr', 'played', 'points'], 'required'],
            [['rank', 'played', 'points'], 'integer'],
            [['club', 'abbr'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rank' => 'Rank',
            'club' => 'Club',
            'abbr' => 'Abbr',
            'played' => 'Played',
            'points' => 'Points',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootMatches()
    {
        return $this->hasMany(FootMatch::className(), ['team2_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootMatches0()
    {
        return $this->hasMany(FootMatch::className(), ['team1_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootPlayers()
    {
        return $this->hasMany(FootPlayer::className(), ['club_id' => 'id']);
    }
}
