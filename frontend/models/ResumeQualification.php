<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeQualification}}".
 *
 * @property int $IdResumeQualification
 * @property string $Name
 * @property int $State
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Resume $resume
 */
class ResumeQualification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ResumeQualification}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'idResume'], 'required'],
            [['State', 'idUsers', 'idResume'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
            [['idResume'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::className(), 'targetAttribute' => ['idResume' => 'IdResume']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResumeQualification' => Yii::t('app', 'Id Resume Qualification'),
            'Name' => Yii::t('app', 'Name'),
            'State' => Yii::t('app', 'State'),
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
     * {@inheritdoc}
     * @return ResumeQualificationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeQualificationQuery(get_called_class());
    }
}
