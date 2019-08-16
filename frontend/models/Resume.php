<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Resume}}".
 *
 * @property int $IdResume
 * @property int $idUsers
 * @property string $ResumeEmail
 * @property string $CreatedAt
 *
 * @property ResumeExperience[] $ResumeExperiences
 * @property User $users
 * @property ResumeAward[] $resumeAwards
 * @property ResumeEducation[] $resumeEducations
 * @property ResumeInterest[] $resumeInterests
 * @property ResumeLanguage[] $resumeLanguages
 * @property ResumeQualification[] $resumeQualifications
 * @property ResumeSkill[] $resumeSkills
 * @property ResumeVolunteer[] $resumeVolunteers
 */
class Resume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Resume}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUsers'], 'required'],
            [['idUsers'], 'integer'],
            [['CreatedAt'], 'safe'],
            [['ResumeEmail'], 'string', 'max' => 100],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResume' => Yii::t('app', 'Id Resume'),
            'idUsers' => Yii::t('app', 'Id Users'),
            'ResumeEmail' => Yii::t('app', 'Resume Email'),
            'CreatedAt' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idResume' => 'IdResume']);
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
    public function getResumeAwards()
    {
        return $this->hasMany(ResumeAward::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeEducations()
    {
        return $this->hasMany(ResumeEducation::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeInterests()
    {
        return $this->hasMany(ResumeInterest::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeLanguages()
    {
        return $this->hasMany(ResumeLanguage::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeQualifications()
    {
        return $this->hasMany(ResumeQualification::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeSkills()
    {
        return $this->hasMany(ResumeSkill::className(), ['idResume' => 'IdResume']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeVolunteers()
    {
        return $this->hasMany(ResumeVolunteer::className(), ['idResume' => 'IdResume']);
    }

    /**
     * {@inheritdoc}
     * @return ResumeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeQuery(get_called_class());
    }
}
