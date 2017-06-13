<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_team_match".
 *
 * @property integer $userid
 * @property integer $match_id
 * @property integer $dr1
 * @property integer $plr1
 * @property integer $plr2
 * @property integer $plr3
 * @property integer $plr4
 * @property integer $plr5
 * @property integer $plr6
 * @property integer $plr7
 * @property integer $plr8
 * @property integer $plr9
 * @property integer $plr10
 * @property integer $dr2
 * @property integer $zah1
 * @property integer $zah2
 * @property integer $zah3
 *
 * @property FootPlayerMatch $match
 * @property FootPlayerMatch $dr10
 * @property FootPlayerMatch $plr90
 * @property FootPlayerMatch $plr100
 * @property FootPlayerMatch $zah10
 * @property FootPlayerMatch $zah20
 * @property FootPlayerMatch $zah30
 * @property FootPlayerMatch $dr20
 * @property FootPlayerMatch $plr11
 * @property FootPlayerMatch $plr20
 * @property FootPlayerMatch $plr30
 * @property FootPlayerMatch $plr40
 * @property FootPlayerMatch $plr50
 * @property FootPlayerMatch $plr60
 * @property FootPlayerMatch $plr70
 * @property FootPlayerMatch $plr80
 * @property FootMatch $match0
 * @property FootTeam $user
 */
class FootTeamMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_team_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'match_id'], 'required'],
            [['userid', 'match_id', 'dr1', 'plr1', 'plr2', 'plr3', 'plr4', 'plr5', 'plr6', 'plr7', 'plr8', 'plr9', 'plr10', 'dr2', 'zah1', 'zah2', 'zah3'], 'integer'],
            [['match_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['match_id' => 'matchweek_id']],
            [['dr1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['dr1' => 'player_id']],
            [['plr9'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr9' => 'player_id']],
            [['plr10'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr10' => 'player_id']],
            [['zah1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['zah1' => 'player_id']],
            [['zah2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['zah2' => 'player_id']],
            [['zah3'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['zah3' => 'player_id']],
            [['dr2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['dr2' => 'player_id']],
            [['plr1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr1' => 'player_id']],
            [['plr2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr2' => 'player_id']],
            [['plr3'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr3' => 'player_id']],
            [['plr4'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr4' => 'player_id']],
            [['plr5'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr5' => 'player_id']],
            [['plr6'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr6' => 'player_id']],
            [['plr7'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr7' => 'player_id']],
            [['plr8'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayerMatch::className(), 'targetAttribute' => ['plr8' => 'player_id']],
            [['match_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootMatch::className(), 'targetAttribute' => ['match_id' => 'id']],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => FootTeam::className(), 'targetAttribute' => ['userid' => 'userid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'User',
            'match_id' => 'Tur',
            'dr1' => 'Dr1',
            'plr1' => 'Him1',
            'plr2' => 'Him2',
            'plr3' => 'Him3',
            'plr4' => 'Him4',
            'plr5' => 'Yah1',
            'plr6' => 'Yah2',
            'plr7' => 'Yah3',
            'plr8' => 'Yah4',
            'plr9' => 'Huj1',
            'plr10' => 'Huj2',
            'dr2' => 'Dr2',
            'zah1' => 'Zah1',
            'zah2' => 'Zah2',
            'zah3' => 'Zah3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['matchweek_id' => 'match_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr10()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'dr1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr90()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr9']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr100()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr10']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZah10()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'zah1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZah20()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'zah2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZah30()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'zah3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr20()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'dr2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr11()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr20()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr30()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr40()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr50()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr60()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr6']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr70()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr7']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlr80()
    {
        return $this->hasOne(FootPlayerMatch::className(), ['player_id' => 'plr8']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch0()
    {
        return $this->hasOne(FootMatch::className(), ['id' => 'match_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(FootTeam::className(), ['userid' => 'userid']);
    }
}
