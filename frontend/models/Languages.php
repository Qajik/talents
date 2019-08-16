<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Languages}}".
 *
 * @property int $IdLanguages
 * @property string $Name
 * @property string $Code
 * @property string $OriginName
 *
 * @property ResumeLanguage[] $resumeLanguages
 */
class Languages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Languages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Code'], 'required'],
            [['Name', 'OriginName'], 'string', 'max' => 50],
            [['Code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdLanguages' => Yii::t('app', 'Id Languages'),
            'Name' => Yii::t('app', 'Name'),
            'Code' => Yii::t('app', 'Code'),
            'OriginName' => Yii::t('app', 'Origin Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeLanguages()
    {
        return $this->hasMany(ResumeLanguage::className(), ['idLanguage' => 'IdLanguages']);
    }

    /**
     * {@inheritdoc}
     * @return LanguagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LanguagesQuery(get_called_class());
    }
}
