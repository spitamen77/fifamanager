<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_player".
 *
 * @property integer $id
 * @property integer $club_id
 * @property string $name
 * @property integer $position
 * @property double $price
 * @property integer $selected
 * @property integer $total
 *
 * @property FootPosition $position0
 * @property FootClub $club
 * @property FootPlayerMatch[] $footPlayerMatches
 * @property FootMatch[] $matchweeks
 * @property FootTeamContent[] $footTeamContents
 * @property FootTeamContent[] $footTeamContents0
 * @property FootTeamContent[] $footTeamContents1
 * @property FootTeamContent[] $footTeamContents2
 * @property FootTeamContent[] $footTeamContents3
 * @property FootTeamContent[] $footTeamContents4
 * @property FootTeamContent[] $footTeamContents5
 * @property FootTeamContent[] $footTeamContents6
 * @property FootTeamContent[] $footTeamContents7
 * @property FootTeamContent[] $footTeamContents8
 * @property FootTeamContent[] $footTeamContents9
 * @property FootTeamContent[] $footTeamContents10
 * @property FootTeamContent[] $footTeamContents11
 * @property FootTeamContent[] $footTeamContents12
 * @property FootTeamContent[] $footTeamContents13
 * @property FootTeam[] $users
 */
class FootPlayer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_id', 'position', 'selected', 'total'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['position'], 'exist', 'skipOnError' => true, 'targetClass' => FootPosition::className(), 'targetAttribute' => ['position' => 'id']],
            [['club_id'], 'exist', 'skipOnError' => true, 'targetClass' => FootClub::className(), 'targetAttribute' => ['club_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_id' => 'Jamoa',
            'name' => 'O`yinchi',
            'position' => 'Pozitsiya',
            'price' => 'Narxi',
            'selected' => 'Tanlandi',
            'total' => 'Jami',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition0()
    {
        return $this->hasOne(FootPosition::className(), ['id' => 'position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(FootClub::className(), ['id' => 'club_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootPlayerMatches()
    {
        return $this->hasMany(FootPlayerMatch::className(), ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatchweeks()
    {
        return $this->hasMany(FootMatch::className(), ['id' => 'matchweek_id'])->viaTable('foot_player_match', ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents()
    {
        return $this->hasMany(FootTeamContent::className(), ['dr1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents0()
    {
        return $this->hasMany(FootTeamContent::className(), ['yah4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents1()
    {
        return $this->hasMany(FootTeamContent::className(), ['yah5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents2()
    {
        return $this->hasMany(FootTeamContent::className(), ['huj1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents3()
    {
        return $this->hasMany(FootTeamContent::className(), ['huj2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents4()
    {
        return $this->hasMany(FootTeamContent::className(), ['huj3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents5()
    {
        return $this->hasMany(FootTeamContent::className(), ['dr2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents6()
    {
        return $this->hasMany(FootTeamContent::className(), ['him1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents7()
    {
        return $this->hasMany(FootTeamContent::className(), ['him2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents8()
    {
        return $this->hasMany(FootTeamContent::className(), ['him3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents9()
    {
        return $this->hasMany(FootTeamContent::className(), ['him4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents10()
    {
        return $this->hasMany(FootTeamContent::className(), ['him5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents11()
    {
        return $this->hasMany(FootTeamContent::className(), ['yah1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents12()
    {
        return $this->hasMany(FootTeamContent::className(), ['yah2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeamContents13()
    {
        return $this->hasMany(FootTeamContent::className(), ['yah3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(FootTeam::className(), ['userid' => 'userid'])->viaTable('foot_team_content', ['dr1' => 'id']);
    }
}
