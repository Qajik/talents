<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeVolunteer}}".
 *
 * @property int $IdResumeVolunteer
 * @property string $Title
 * @property string $Field
 * @property string $Website
 * @property string $Year
 * @property string $Description
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Resume $resume
 */
class ResumeVolunteer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $Name;
    public static function tableName()
    {
        return '{{%ResumeVolunteer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Field', 'idUsers', 'idResume'], 'required'],
            [['Website', 'Description'], 'string'],
            [['Year'], 'safe'],
            [['idUsers', 'idResume'], 'integer'],
            [['Title', 'Field'], 'string', 'max' => 100],
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
            'IdResumeVolunteer' => Yii::t('app', 'Id Resume Volunteer'),
            'Title' => Yii::t('app', 'Title'),
            'Field' => Yii::t('app', 'Field'),
            'Website' => Yii::t('app', 'Website'),
            'Year' => Yii::t('app', 'Year'),
            'Description' => Yii::t('app', 'Description'),
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
     * @return ResumeVolunteerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeVolunteerQuery(get_called_class());
    }
}
