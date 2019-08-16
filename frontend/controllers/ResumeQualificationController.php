<?php

namespace frontend\controllers;

use Yii;
use app\models\ResumeQualification;
use frontend\models\ResumeQualificationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\RequestComponent;
use app\components\BaseController;

/**
 * ResumeQualificationController implements the CRUD actions for ResumeQualification model.
 */
class ResumeQualificationController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ResumeQualification models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeQualificationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeQualification model.
     * @return mixed
     */
    public function actionView($viewType = RequestComponent::LIST_VIEW)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeQualificationSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderPartial($getView, [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new ResumeQualification model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \Throwable
     */
    public function actionCreate()
    {
        $model          = new ResumeQualification();
        $searchModel    = new ResumeQualificationSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);
        $model->State   = 1;
        $model->idResume= Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers = Yii::$app->user->getIdentity()->IdUsers;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->IdResumeSkills]);
        }

        return $this->renderPartial('create', [
            'model'         => $model,
            'dataProvider'  => $dataProvider
        ], TRUE, FALSE);
    }

    /**
     * Updates an existing ResumeQualification model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdResumeQualification]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResumeQualification model.
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

        return $this->actionCreate();
    }

    /**
     * Finds the ResumeQualification model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeQualification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeQualification::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
