<?php

namespace frontend\controllers;

use frontend\helpers\EnumHelper;
use Yii;
use app\models\ResumeExperiences;
use frontend\models\ResumeExperiencesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\RequestComponent;
use  yii\web\Session;
use app\components\BaseController;
use app\models\Options;
use frontend\helpers\StaticHelper;
use yii\helpers\ArrayHelper;
/**
 * ResumeExperiencesController implements the CRUD actions for ResumeExperiences model.
 */
class ResumeExperiencesController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ResumeExperiences models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeExperiencesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeExperiences model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }

    public function actionView($viewType = RequestComponent::LIST_VIEW)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeExperiencesSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->renderPartial($getView, [
            'dataProvider' => $dataProvider,
            'monthList' => EnumHelper::getMonthsList(),
            'yearList' => EnumHelper::getYearsList()
        ]);
    }

    /**
     * Creates a new ResumeExperiences model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \Throwable
     */
    public function actionCreate()
    {
        $model              = new ResumeExperiences();
        $enumMonth          = EnumHelper::getMonthsList();
        $model->idResume    = Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers     = Yii::$app->user->getIdentity()->IdUsers;
        
        if(Yii::$app->request->isPost){
            $fullPostData           = Yii::$app->request->post()['ResumeExperiences'];
            $model->StartDate       = (isset($fullPostData['startYear']) && isset($enumMonth[$fullPostData['startMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['startYear'] . '-' . $enumMonth[$fullPostData['startMonth']] . '-' . '01')) : NULL;
            $model->EndDate         = (isset($fullPostData['endYear']) && isset($enumMonth[$fullPostData['endMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['endYear'] . '-' . $enumMonth[$fullPostData['endMonth']] . '-' . '01')) : NULL;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }
        
        $optionModelSearch = Options::find()
                ->where("OptionType in ('employment', 'discipline', 'career_level', 'legal_form', 'employee')")
                ->all();
        
        $optionsLists = StaticHelper::groupArrayByColumn($optionModelSearch, 
                    ['groupBy'=>'OptionType', 'key'=>'IdOptions'],
                    function($item){
                        return $item->Name;
                    });
        
        $industry       = \app\models\OptionsIntustry::find()->all();
        $m_IndustryList = ArrayHelper::map($industry, 'IdOptionsIntustry', 'Name');
        
        $m_SegmentList = [];
        if($model->idIndustries){
            $segments       = \app\models\OptionsSegment::find(['idOptionsIndustry'=>$model->idIndustries])->all();
            $m_SegmentList  = ArrayHelper::map($segments, 'IdOptionSegment', 'Name'); 
        }
        
        return $this->renderPartial('create', [
            'model'         => $model,
            'monthList'     => $enumMonth,
            'yearList'      => EnumHelper::getYearsList(),
            'optionsLists'  => $optionsLists,
            'm_IndustryList'=> $m_IndustryList,
            'm_SegmentList' => $m_SegmentList
        ], TRUE, FALSE);
    }

    /**
     * Updates an existing ResumeExperiences model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model      = $this->findModel($id);
        $enumMonth  = EnumHelper::getMonthsList();
        $enumYear   = EnumHelper::getYearsList();
        
        if(Yii::$app->request->isPost){
            $fullPostData           = Yii::$app->request->post()['ResumeExperiences'];
            $model->StartDate       = (isset($fullPostData['startYear']) && isset($enumMonth[$fullPostData['startMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['startYear'] . '-' . $enumMonth[$fullPostData['startMonth']] . '-' . '01')) : NULL;
            $model->EndDate         = (isset($fullPostData['endYear']) && isset($enumMonth[$fullPostData['endMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['endYear'] . '-' . $enumMonth[$fullPostData['endMonth']] . '-' . '01')) : NULL;
            $model->idCompany       = $fullPostData['idCompany']?:NULL;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }
  //var_dump($model->getErrors());die;
        $optionModelSearch = Options::find()
                ->where("OptionType in ('employment', 'discipline', 'career_level', 'legal_form', 'employee')")
                ->all();

        $optionsLists = StaticHelper::groupArrayByColumn($optionModelSearch, 
                ['groupBy'=>'OptionType', 'key'=>'IdOptions'],
                function($item){
                    return $item->Name;
                });

        $industry           = \app\models\OptionsIntustry::find()->all();
        $m_IndustryList     = ArrayHelper::map($industry, 'IdOptionsIntustry', 'Name'); 
        
        $segments           = \app\models\OptionsSegment::find(['idOptionsIndustry'=>$model->idIndustries])->all();
        $m_SegmentList      = ArrayHelper::map($segments, 'IdOptionSegment', 'Name'); 
        
        $model->startMonth  = StaticHelper::parseDate($model->StartDate,'month');
        $model->endMonth    = StaticHelper::parseDate($model->EndDate, 'month');
        $model->startYear   = StaticHelper::parseDate($model->StartDate,'year');
        $model->endYear     = StaticHelper::parseDate($model->EndDate,'year');
        
        return $this->renderPartial('update', [
            'model'         => $model,
            'monthList'     => $enumMonth,
            'yearList'      => $enumYear,
            'optionsLists'  => $optionsLists,
            'm_IndustryList'=> $m_IndustryList,
            'm_SegmentList' => $m_SegmentList
        ]);
    }

    /**
     * Deletes an existing ResumeExperiences model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->actionView(RequestComponent::LIST_VIEW);
    }
    
    
    public function actionSegments($id){
        $m_Segments = \app\models\OptionsSegment::find()->where(['idOptionsIndustry'=>$id])->all();
        $m_SegmentList = ArrayHelper::map($m_Segments, 'IdOptionSegment', 'Name');
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $m_SegmentList;
    }
    /**
     * Finds the ResumeExperiences model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeExperiences the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeExperiences::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
