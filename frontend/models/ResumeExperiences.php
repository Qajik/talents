<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ResumeExperiences}}".
 *
 * @property int $IdResumeExperiences
 * @property string $JobTitle
 * @property int $idOptionsEmploymentsList
 * @property int $idDiscipline
 * @property int $idCareerLevel
 * @property string $Description
 * @property string $CompanyName
 * @property int $idCompany
 * @property int $idIndustries
 * @property int $idSegments
 * @property int $idLegalForm
 * @property int $idEmployees
 * @property string $CompanyWebsite
 * @property string $StartDate
 * @property string $EndDate
 * @property int $IsCurrentJob
 * @property string $CreatedAt
 * @property int $idUsers
 * @property int $idResume
 *
 * @property User $users
 * @property Option $optionsEmploymentsList
 * @property Resume $Resume
 * @property OptionsIntustry $industries
 * @property OptionsSegment $segments
 * @property Option $legalForm
 * @property Option $employees
 * @property Company $company
 * @property Option $discipline
 * @property Option $careerLevel
 */
class ResumeExperiences extends \yii\db\ActiveRecord
{
    public $startMonth;
    public $startYear;
    public $endMonth;
    public $endYear;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ResumeExperiences}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['startYear', 'startMonth', 'JobTitle', 'idOptionsEmploymentsList', 'idDiscipline', 'idCareerLevel', 'CompanyName', 'idIndustries', 'idSegments', 'idLegalForm', 'idEmployees', 'StartDate', 'idUsers', 'idResume'], 'required'],
            [['endMonth', 'endYear'], 'required', 'when' => function($model) {
                return $model->IsCurrentJob == FALSE;
            }],
            [['idOptionsEmploymentsList', 'idDiscipline', 'idCareerLevel', 'idCompany', 'idIndustries', 'idSegments', 'idLegalForm', 'idEmployees', 'IsCurrentJob', 'idUsers', 'idResume'], 'integer'],
            [['Description', 'CompanyWebsite'], 'string'],
            [['StartDate', 'EndDate', 'CreatedAt'], 'safe'],
            [['JobTitle', 'CompanyName'], 'string', 'max' => 255],
            [['idUsers'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['idUsers' => 'IdUsers']],
            [['idOptionsEmploymentsList'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idOptionsEmploymentsList' => 'IdOptions']],
            [['idResume'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::className(), 'targetAttribute' => ['idResume' => 'IdResume']],
            [['idIndustries'], 'exist', 'skipOnError' => true, 'targetClass' => OptionsIntustry::className(), 'targetAttribute' => ['idIndustries' => 'IdOptionsIntustry']],
            [['idSegments'], 'exist', 'skipOnError' => true, 'targetClass' => OptionsSegment::className(), 'targetAttribute' => ['idSegments' => 'IdOptionSegment']],
            [['idLegalForm'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idLegalForm' => 'IdOptions']],
            [['idEmployees'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idEmployees' => 'IdOptions']],
          //  [['idCompany'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['idCompany' => 'IdCompany']],
            [['idDiscipline'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idDiscipline' => 'IdOptions']],
            [['idCareerLevel'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['idCareerLevel' => 'IdOptions']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdResumeExperiences' => Yii::t('app', 'Id Resume Exoeriences'),
            'JobTitle' => Yii::t('app', 'Job Title'),
            'idOptionsEmploymentsList' => Yii::t('app', 'Employment'),
            'idDiscipline' => Yii::t('app', 'Discipline'),
            'idCareerLevel' => Yii::t('app', 'Career Level'),
            'Description' => Yii::t('app', 'Description'),
            'CompanyName' => Yii::t('app', 'Company Name'),
            'idCompany' => Yii::t('app', 'Id Company'),
            'idIndustries' => Yii::t('app', 'Industries'),
            'idSegments' => Yii::t('app', 'Segments'),
            'idLegalForm' => Yii::t('app', 'Legal Form'),
            'idEmployees' => Yii::t('app', 'Employees'),
            'CompanyWebsite' => Yii::t('app', 'Company Website'),
            'StartDate' => Yii::t('app', 'Start Date'),
            'EndDate' => Yii::t('app', 'End Date'),
            'IsCurrentJob' => Yii::t('app', 'Current Job'),
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
    public function getOptionsEmploymentsList()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idOptionsEmploymentsList']);
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
    public function getIndustries()
    {
        return $this->hasOne(OptionsIntustry::className(), ['IdOptionsIntustry' => 'idIndustries']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSegments()
    {
        return $this->hasOne(OptionsSegment::className(), ['IdOptionSegment' => 'idSegments']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLegalForm()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idLegalForm']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idEmployees']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['IdCompany' => 'idCompany']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idDiscipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCareerLevel()
    {
        return $this->hasOne(Options::className(), ['IdOptions' => 'idCareerLevel']);
    }
 
    /**
     * {@inheritdoc}
     * @return ResumeExperiencesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResumeExperiencesQuery(get_called_class());
    }
    
}
