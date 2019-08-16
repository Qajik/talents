<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeLanguage}}".
 *
 * @property int $IdResumeLanguage
 * @property int $idLanguage
 * @property int $Level
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Resume $resume
 * @property Language $language
 */
class ResumeLanguage extends \yii\db\ActiveRecord
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
            [['Level', 'idUsers', 'idResume','LanguageCode'], 'required'],
            [[ 'Level', 'idUsers', 'idResume'], 'integer'],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
            [['idResume'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::className(), 'targetAttribute' => ['idResume' => 'IdResume']],
           // [['idLanguage'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['idLanguage' => 'IdLanguages']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResumeLanguage' => Yii::t('app', 'Id Resume Language'),
            'LanguageCode' => Yii::t('app', 'Language'),
            'Level' => Yii::t('app', 'Level'),
            'idUsers' => Yii::t('app', 'Id Users'),
            'idResume' => Yii::t('app', 'Id Resume'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['IdUsers' => 'idUsers']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResume()
    {
        return $this->hasOne(Resume::className(), ['IdResume' => 'idResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getLanguage()
//    {
//        return $this->hasOne(Languages::className(), ['IdLanguages' => 'idLanguage']);
//    }

    /**
     * {@inheritdoc}
     * @return ResumeLanguageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeLanguageQuery(get_called_class());
    }
}
