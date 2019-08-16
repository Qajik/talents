<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Options}}".
 *
 * @property int $IdOptions
 * @property string $Name
 * @property string $OptionType
 * @property int $Status
 *
 * @property ResumeExperience[] $ResumeExperiences
 * @property ResumeExperience[] $ResumeExperiences0
 * @property ResumeExperience[] $ResumeExperiences1
 * @property ResumeExperience[] $ResumeExperiences2
 * @property ResumeExperience[] $ResumeExperiences3
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Options}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'OptionType'], 'required'],
            [['Status'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['OptionType'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdOptions' => Yii::t('app', 'Id Options'),
            'Name' => Yii::t('app', 'Name'),
            'OptionType' => Yii::t('app', 'Option Type'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idOptionsEmploymentsList' => 'IdOptions']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences0()
    {
        return $this->hasMany(ResumeExperience::className(), ['idLegalForm' => 'IdOptions']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences1()
    {
        return $this->hasMany(ResumeExperience::className(), ['idEmployees' => 'IdOptions']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences2()
    {
        return $this->hasMany(ResumeExperience::className(), ['idDiscipline' => 'IdOptions']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences3()
    {
        return $this->hasMany(ResumeExperience::className(), ['idCareerLevel' => 'IdOptions']);
    }

    /**
     * {@inheritdoc}
     * @return OptionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsQuery(get_called_class());
    }
}
