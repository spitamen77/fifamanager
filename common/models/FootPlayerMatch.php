<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_player_match".
 *
 * @property integer $player_id
 * @property integer $matchweek_id
 * @property integer $minutes
 * @property integer $goal
 * @property integer $assists
 * @property integer $clean
 * @property integer $goal_conseded
 * @property integer $own_goal
 * @property integer $penalti_saved
 * @property integer $penalti_missed
 * @property integer $yellow_card
 * @property integer $red_card
 * @property integer $saves
 * @property double $price
 * @property integer $matchweek_point
 *
 * @property FootMatch $matchweek
 * @property FootPlayer $player
 * @property FootTeamMatch[] $footTeamMatches
 * @property FootTeamMatch[] $footTeamMatches0
 * @property FootTeamMatch[] $footTeamMatches1
 * @property FootTeamMatch[] $footTeamMatches2
 * @property FootTeamMatch[] $footTeamMatches3
 * @property FootTeamMatch[] $footTeamMatches4
 * @property FootTeamMatch[] $footTeamMatches5
 * @property FootTeamMatch[] $footTeamMatches6
 * @property FootTeamMatch[] $footTeamMatches7
 * @property FootTeamMatch[] $footTeamMatches8
 * @property FootTeamMatch[] $footTeamMatches9
 * @property FootTeamMatch[] $footTeamMatches10
 * @property FootTeamMatch[] $footTeamMatches11
 * @property FootTeamMatch[] $footTeamMatches12
 * @property FootTeamMatch[] $footTeamMatches13
 * @property FootTeamMatch[] $footTeamMatches14
 * @property FootTeam[] $users
 */
class FootPlayerMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_player_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'matchweek_id'], 'required'],
            [['player_id', 'matchweek_id', 'minutes', 'goal', 'assists', 'clean', 'goal_conseded', 'own_goal', 'penalti_saved', 'penalti_missed', 'yellow_card', 'red_card', 'saves', 'matchweek_point'], 'integer'],
            [['price'], 'number'],
            [['matchweek_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootMatch::className(), 'targetAttribute' => ['matchweek_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['player_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'O`yinchi',
            'matchweek_id' => 'Tur',
            'minutes' => 'Daqiqa',
            'goal' => 'Goal',
            'assists' => 'Asistent',
            'clean' => 'Clean',
            'goal_conseded' => 'Goal Conseded',
            'own_goal' => 'Avtogol',
            'penalti_saved' => 'Penalti qaytardi',
            'penalti_missed' => 'Penalti Missed',
            'yellow_card' => 'Sariq k.',
            'red_card' => 'Qizil k.',
            'saves' => 'Saves',
            'price' => 'Narxi',
            'matchweek_point' => 'Tur ochko',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatchweek()
    {
        return $this->hasOne(FootMatch::className(), ['id' => 'matchweek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches()
    {
        return $this->hasMany(FootTeamMatch::className(), ['match_id' => 'matchweek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches0()
    {
        return $this->hasMany(FootTeamMatch::className(), ['dr1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches1()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr9' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches2()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr10' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches3()
    {
        return $this->hasMany(FootTeamMatch::className(), ['zah1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches4()
    {
        return $this->hasMany(FootTeamMatch::className(), ['zah2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches5()
    {
        return $this->hasMany(FootTeamMatch::className(), ['zah3' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches6()
    {
        return $this->hasMany(FootTeamMatch::className(), ['dr2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches7()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches8()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches9()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr3' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches10()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr4' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches11()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr5' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches12()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr6' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches13()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr7' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamMatches14()
    {
        return $this->hasMany(FootTeamMatch::className(), ['plr8' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(FootTeam::className(), ['userid' => 'userid'])->viaTable('foot_team_match', ['match_id' => 'matchweek_id']);
    }
}
