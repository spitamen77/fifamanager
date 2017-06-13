<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_user".
 *
 * @property integer $id
 * @property integer $phone
 * @property string $password
 * @property integer $code
 *
 * @property FootTeam[] $footTeams
 * @property FootUserProfile[] $footUserProfiles
 */
class FootUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'code'], 'integer'],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'password' => 'Password',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootTeams()
    {
        return $this->hasMany(FootTeam::className(), ['userid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFootUserProfiles()
    {
        return $this->hasMany(FootUserProfile::className(), ['userid' => 'id']);
    }
}
