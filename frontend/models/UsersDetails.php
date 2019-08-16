<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeLanguage}}".
 *
 * @property int $IdResumeLanguage
 * @property int $Level
 * @property int $idUsers
 * @property int $idResume
 * @property string $LanguageCode
 *
 * @property User $users
 * @property Resume $resume
 */
class UsersDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ResumeLanguage}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Level', 'idUsers', 'idResume', 'LanguageCode'], 'required'],
            [['Level', 'idUsers', 'idResume'], 'integer'],
            [['LanguageCode'], 'string', 'max' => 10],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
            [['idResume'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::className(), 'targetAttribute' => ['idResume' => 'IdResume']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResumeLanguage' => Yii::t('app', 'Id Resume Language'),
            'Level' => Yii::t('app', 'Level'),
            'idUsers' => Yii::t('app', 'Id Users'),
            'idResume' => Yii::t('app', 'Id Resume'),
            'LanguageCode' => Yii::t('app', 'Language Code'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['IdUsers' => 'idUsers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResume()
    {
        return $this->hasOne(Resume::className(), ['IdResume' => 'idResume']);
    }

    /**
     * {@inheritdoc}
     * @return UsersDetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersDetailsQuery(get_called_class());
    }
}
