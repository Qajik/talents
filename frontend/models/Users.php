<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Users}}".
 *
 * @property int $IdUser
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $Password
 * @property string $AccessToken
 * @property string $AuthKey
 * @property int $Role
 * @property string $CreatedAt
 * @property string $UpdatedAt
 *
 * @property ResumeExperience[] $ResumeExperiences
 * @property ResumeAward[] $resumeAwards
 * @property ResumeEducation[] $resumeEducations
 * @property ResumeInterest[] $resumeInterests
 * @property ResumeLanguage[] $resumeLanguages
 * @property ResumeQualification[] $resumeQualifications
 * @property ResumeSkill[] $resumeSkills
 * @property ResumeVolunteer[] $resumeVolunteers
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'Email', 'Password', 'AccessToken', 'AuthKey', 'Role'], 'required'],
            [['Role'], 'integer'],
            [['CreatedAt', 'UpdatedAt'], 'safe'],
            [['FirstName', 'LastName'], 'string', 'max' => 25],
            [['Email'], 'string', 'max' => 50],
            [['Password', 'AccessToken', 'AuthKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdUser' => Yii::t('app', 'Id User'),
            'FirstName' => Yii::t('app', 'First Name'),
            'LastName' => Yii::t('app', 'Last Name'),
            'Email' => Yii::t('app', 'Email'),
            'Password' => Yii::t('app', 'Password'),
            'AccessToken' => Yii::t('app', 'Access Token'),
            'AuthKey' => Yii::t('app', 'Auth Key'),
            'Role' => Yii::t('app', 'Role'),
            'CreatedAt' => Yii::t('app', 'Created At'),
            'UpdatedAt' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeAwards()
    {
        return $this->hasMany(ResumeAward::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeEducations()
    {
        return $this->hasMany(ResumeEducation::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeInterests()
    {
        return $this->hasMany(ResumeInterest::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeLanguages()
    {
        return $this->hasMany(ResumeLanguage::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeQualifications()
    {
        return $this->hasMany(ResumeQualification::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeSkills()
    {
        return $this->hasMany(ResumeSkill::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeVolunteers()
    {
        return $this->hasMany(ResumeVolunteer::className(), ['idUsers' => 'IdUser']);
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
