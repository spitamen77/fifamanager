<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_team_content".
 *
 * @property integer $userid
 * @property integer $dr1
 * @property integer $dr2
 * @property integer $him1
 * @property integer $him2
 * @property integer $him3
 * @property integer $him4
 * @property integer $him5
 * @property integer $yah1
 * @property integer $yah2
 * @property integer $yah3
 * @property integer $yah4
 * @property integer $yah5
 * @property integer $huj1
 * @property integer $huj2
 * @property integer $huj3
 *
 * @property FootTeam $user
 * @property FootPlayer $dr10
 * @property FootPlayer $yah40
 * @property FootPlayer $yah50
 * @property FootPlayer $huj10
 * @property FootPlayer $huj20
 * @property FootPlayer $huj30
 * @property FootPlayer $dr20
 * @property FootPlayer $him10
 * @property FootPlayer $him20
 * @property FootPlayer $him30
 * @property FootPlayer $him40
 * @property FootPlayer $him50
 * @property FootPlayer $yah10
 * @property FootPlayer $yah20
 * @property FootPlayer $yah30
 */
class FootTeamContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_team_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'dr1'], 'required'],
            [['userid', 'dr1', 'dr2', 'him1', 'him2', 'him3', 'him4', 'him5', 'yah1', 'yah2', 'yah3', 'yah4', 'yah5', 'huj1', 'huj2', 'huj3'], 'integer'],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => FootTeam::className(), 'targetAttribute' => ['userid' => 'userid']],
            [['dr1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['dr1' => 'id']],
            [['yah4'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['yah4' => 'id']],
            [['yah5'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['yah5' => 'id']],
            [['huj1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['huj1' => 'id']],
            [['huj2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['huj2' => 'id']],
            [['huj3'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['huj3' => 'id']],
            [['dr2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['dr2' => 'id']],
            [['him1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['him1' => 'id']],
            [['him2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['him2' => 'id']],
            [['him3'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['him3' => 'id']],
            [['him4'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['him4' => 'id']],
            [['him5'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['him5' => 'id']],
            [['yah1'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['yah1' => 'id']],
            [['yah2'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['yah2' => 'id']],
            [['yah3'], 'exist', 'skipOnError' => true, 'targetClass' => FootPlayer::className(), 'targetAttribute' => ['yah3' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'dr1' => 'Dr1',
            'dr2' => 'Dr2',
            'him1' => 'Him1',
            'him2' => 'Him2',
            'him3' => 'Him3',
            'him4' => 'Him4',
            'him5' => 'Him5',
            'yah1' => 'Yah1',
            'yah2' => 'Yah2',
            'yah3' => 'Yah3',
            'yah4' => 'Yah4',
            'yah5' => 'Yah5',
            'huj1' => 'Huj1',
            'huj2' => 'Huj2',
            'huj3' => 'Huj3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(FootTeam::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr10()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'dr1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah40()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'yah4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah50()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'yah5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj10()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'huj1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj20()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'huj2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj30()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'huj3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr20()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'dr2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim10()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'him1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim20()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'him2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim30()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'him3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim40()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'him4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim50()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'him5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah10()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'yah1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah20()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'yah2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah30()
    {
        return $this->hasOne(FootPlayer::className(), ['id' => 'yah3']);
    }
}
