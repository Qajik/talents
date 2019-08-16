<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeAwards}}".
 *
 * @property int $IdResumeAwards
 * @property string $Title
 * @property string $Field
 * @property string $Year
 * @property string $Description
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Resume $resume
 */
class ResumeAwards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ResumeAwards}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Field', 'Year', 'idUsers', 'idResume'], 'required'],
            [['Description'], 'string'],
            [['idUsers', 'idResume', 'Year'], 'integer'],
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
            'IdResumeAwards' => Yii::t('app', 'Id Resume Awards'),
            'Title' => Yii::t('app', 'Title'),
            'Field' => Yii::t('app', 'Field'),
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
     * @return ResumeAwardsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeAwardsQuery(get_called_class());
    }
}
