<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%OptionsUniversities}}".
 *
 * @property int $IdOptionsUniversities
 * @property string $Name
 * @property string $Address
 * @property int $Status
 *
 * @property ResumeEducation[] $resumeEducations
 */
class OptionsUniversities extends \yii\db\ActiveRecord
{
    public $value;
    public $id;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%OptionsUniversities}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Address'], 'string'],
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
            'IdOptionsUniversities' => Yii::t('app', 'Id Options Universities'),
            'Name' => Yii::t('app', 'Name'),
            'Address' => Yii::t('app', 'Address'),
            'Status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeEducations()
    {
        return $this->hasMany(ResumeEducation::className(), ['idUniversities' => 'IdOptionsUniversities']);
    }

    /**
     * {@inheritdoc}
     * @return OptionsUniversitiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OptionsUniversitiesQuery(get_called_class());
    }
}
