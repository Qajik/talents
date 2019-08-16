<?php

namespace frontend\controllers;

use Yii;
use app\models\ResumeEducations;
use frontend\models\ResumeEducationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\RequestComponent;
use yii\web\Session;
use frontend\helpers\EnumHelper;
use app\models\Options;
use yii\helpers\ArrayHelper;
use app\models\OptionsUniversities;
use app\components\BaseController;
use yii\db\Query;
use frontend\components\CommandDefinitionsComponent;
use frontend\services\UniversityService;
use frontend\helpers\StaticHelper;
/**
 * ResumeEducationsController implements the CRUD actions for ResumeEducations model.
 */
class ResumeEducationsController extends BaseController
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
     * Lists all ResumeEducations models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel    = new ResumeEducationsSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider'=> $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeEducations model.
     * @return mixed
     */
    public function actionView($viewType = RequestComponent::LIST_VIEW)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeEducationsSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderPartial($getView, [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new ResumeEducations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \Throwable
     */
    public function actionCreate()
    {
        $enumMonth      = EnumHelper::getMonthsList();
        $enumYear       = EnumHelper::getYearsList();
        $model          = new ResumeEducations();
        $m_Degree       = Options::find(['OptionType' => 'degree'])->all();
        $m_DegreeList   = ArrayHelper::map($m_Degree, 'IdOptions', 'Name');

        if (Yii::$app->request->isPost) {
            $fullPostData           = Yii::$app->request->post()['ResumeEducations'];
            $model->StartDate       = (isset($enumYear[$fullPostData['startYear']]) && isset($enumMonth[$fullPostData['startMonth']])) ? date('Y-m-d H:i:s', strtotime($enumYear[$fullPostData['startYear']] . '-' . $enumMonth[$fullPostData['startMonth']] . '-' . '01')) : NULL;
            $model->EndDate         = (isset($enumYear[$fullPostData['endYear']]) && isset($enumMonth[$fullPostData['endMonth']])) ? date('Y-m-d H:i:s', strtotime($enumYear[$fullPostData['endYear']] . '-' . $enumMonth[$fullPostData['endMonth']] . '-' . '01')) : NULL;
            $model->idResume        = Yii::$app->session->get('Resume')->IdResume;
            $model->idUsers         = Yii::$app->user->getIdentity()->IdUsers;
            $universityService      = new UniversityService();
            $univercityId           = $universityService->onCreateEducation($fullPostData['universityName']);
            $model->idUniversities  = $univercityId;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }

        return $this->renderPartial('create', [
            'model'         => $model,
            'monthList'     => $enumMonth,
            'yearList'      => $enumYear,
            'm_DegreeList'  => $m_DegreeList
        ], TRUE, FALSE);
    }

    /**
     * Updates an existing ResumeEducations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $enumMonth      = EnumHelper::getMonthsList();
        $enumYear       = EnumHelper::getYearsList();
        $m_Degree       = Options::find(['OptionType' => 'degree'])->all();
        $m_DegreeList   = ArrayHelper::map($m_Degree, 'IdOptions', 'Name');
        $model          = $this->findModel($id);
        
        if (Yii::$app->request->isPost) {
            $fullPostData           = Yii::$app->request->post()['ResumeEducations'];
            $model->StartDate       = (isset($fullPostData['startYear']) && isset($enumMonth[$fullPostData['startMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['startYear'] . '-' . $enumMonth[$fullPostData['startMonth']] . '-' . '01')) : NULL;
            $model->EndDate         = (isset($fullPostData['endYear']) && isset($enumMonth[$fullPostData['endMonth']])) ? date('Y-m-d H:i:s', strtotime($fullPostData['endYear'] . '-' . $enumMonth[$fullPostData['endMonth']] . '-' . '01')) : NULL;
            $universityService      = new UniversityService();
            $univercityId           = $universityService->onCreateEducation($fullPostData['universityName']);
            $model->idUniversities  = $univercityId;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }
        
        $model->startMonth      = StaticHelper::parseDate($model->StartDate,'month');
        $model->endMonth        = StaticHelper::parseDate($model->EndDate, 'month');
        $model->startYear       = StaticHelper::parseDate($model->StartDate,'year');
        $model->endYear         = StaticHelper::parseDate($model->EndDate,'year');
        $model->universityName  = OptionsUniversities::findOne(['IdOptionsUniversities'=>$model->idUniversities])->Name;
        
        return $this->renderPartial('update', [
            'model'         => $model,
            'monthList'     => $enumMonth,
            'yearList'      => $enumYear,
            'm_DegreeList'  => $m_DegreeList
        ]);
    }

    /**
     * Deletes an existing ResumeEducations model.
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

    public function actionAutocomplate()
    {
        return $this->autocomplate();
    }

    /**
     * Finds the ResumeEducations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeEducations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeEducations::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
