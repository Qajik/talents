<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Company}}".
 *
 * @property int $IdCompany
 * @property string $Name
 * @property string $Website
 * @property string $ImageLogo
 * @property int $idUsers Contact Person
 * @property string $Address
 *
 * @property ResumeExperience[] $resumeExperiences
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Company}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'idUsers'], 'required'],
            [['Website', 'ImageLogo', 'Address'], 'string'],
            [['idUsers'], 'integer'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCompany' => Yii::t('app', 'Id Company'),
            'Name' => Yii::t('app', 'Name'),
            'Website' => Yii::t('app', 'Website'),
            'ImageLogo' => Yii::t('app', 'Image Logo'),
            'idUsers' => Yii::t('app', 'Contact Person'),
            'Address' => Yii::t('app', 'Address'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeExperiences()
    {
        return $this->hasMany(ResumeExperience::className(), ['idCompany' => 'IdCompany']);
    }

    /**
     * {@inheritdoc}
     * @return CompanyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompanyQuery(get_called_class());
    }
}
