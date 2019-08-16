<?php

namespace app\models;

use Yii;
use frontend\helpers\EnumHelper;

/**
 * This is the model class for table "{{%ResumeEducations}}".
 *
 * @property int $IdResumeEducations
 * @property int $idUniversities
 * @property string $Field
 * @property int $idDegree
 * @property string $Description
 * @property string $StartDate
 * @property string $EndDate
 * @property string $CreatedAt
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Resume $resume
 * @property OptionsUniversity $universities
 */
class ResumeEducations extends \yii\db\ActiveRecord
{
    public $startMonth;
    public $startYear;
    public $endMonth;
    public $endYear;
    public $universityName;
    public $degree;
    public $Options;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ResumeEducations}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['universityName', 'startMonth', 'startYear', 'endMonth', 'endYear', 'Field', 'idDegree', 'StartDate', 'idUsers', 'idResume'], 'required'],
            [['idUniversities', 'idDegree', 'idUsers', 'idResume'], 'integer'],
            [['Description'], 'string'],
            [['StartDate', 'EndDate', 'CreatedAt'], 'safe'],
            [['Field'], 'string', 'max' => 255],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
            [['idResume'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::className(), 'targetAttribute' => ['idResume' => 'IdResume']],
            [['idUniversities'], 'exist', 'skipOnError' => true, 'targetClass' => OptionsUniversities::className(), 'targetAttribute' => ['idUniversities' => 'IdOptionsUniversities']],
            [['idDegree'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idDegree' => 'IdOptions']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResumeEducations' => Yii::t('app', 'Id Resume Educations'),
            'universityName' => Yii::t('app', 'Universities'),
            'Field' => Yii::t('app', 'Field'),
            'idDegree' => Yii::t('app', 'Id Degree'),
            'Description' => Yii::t('app', 'Description'),
            'StartDate' => Yii::t('app', 'Start Date'),
            'EndDate' => Yii::t('app', 'End Date'),
            'CreatedAt' => Yii::t('app', 'Created At'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getUniversities()
    {
        return $this->hasOne(OptionsUniversities::className(), ['IdOptionsUniversities' => 'idUniversities']);
    }
    
    public function getOptions()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idDegree']);
    }

    /**
     * {@inheritdoc}
     * @return ResumeEducationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeEducationsQuery(get_called_class());
    }
    
//    public function beforeSave($insert) {
//        
//        parent::beforeSave($insert);
//        
//        $enumMonth      = EnumHelper::getMonthsList();
//        $enumYear       = EnumHelper::getYearsList();
//        
//    }
}
