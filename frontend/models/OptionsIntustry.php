<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%OptionsIntustry}}".
 *
 * @property int $IdOptionsIntustry
 * @property string $Name
 * @property int $Status
 *
 * @property OptionsSegment[] $optionsSegments
 * @property ResumeExperience[] $ResumeExperiences
 */
class OptionsIntustry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%OptionsIntustry}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Status'], 'integer'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdOptionsIntustry' => Yii::t('app', 'Id Options Intustry'),
            'Name' => Yii::t('app', 'Name'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionsSegments()
    {
        return $this->hasMany(OptionsSegment::className(), ['idOptionsIndustry' => 'IdOptionsIntustry']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idIndustries' => 'IdOptionsIntustry']);
    }

    /**
     * {@inheritdoc}
     * @return OptionsIntustryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsIntustryQuery(get_called_class());
    }
}
