<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%OptionsSegment}}".
 *
 * @property int $IdOptionSegment
 * @property int $idOptionsIndustry
 * @property string $Name
 * @property int $Status
 *
 * @property OptionsIntustry $optionsIndustry
 * @property ResumeExperience[] $ResumeExperiences
 */
class OptionsSegment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%OptionsSegment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOptionsIndustry', 'Name'], 'required'],
            [['idOptionsIndustry', 'Status'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['idOptionsIndustry'], 'exist', 'skipOnError' => true, 'targetClass' => OptionsIntustry::className(), 'targetAttribute' => ['idOptionsIndustry' => 'IdOptionsIntustry']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdOptionSegment' => Yii::t('app', 'Id Option Segment'),
            'idOptionsIndustry' => Yii::t('app', 'Id Options Industry'),
            'Name' => Yii::t('app', 'Name'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionsIndustry()
    {
        return $this->hasOne(OptionsIntustry::className(), ['IdOptionsIntustry' => 'idOptionsIndustry']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idSegments' => 'IdOptionSegment']);
    }

    /**
     * {@inheritdoc}
     * @return OptionsSegmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsSegmentQuery(get_called_class());
    }
}
