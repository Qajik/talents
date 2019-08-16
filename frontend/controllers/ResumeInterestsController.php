<?php

namespace frontend\controllers;

use Yii;
use app\models\ResumeInterests;
use frontend\models\ResumeInterestsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\RequestComponent;
use app\components\BaseController;

/**
 * ResumeInterestsController implements the CRUD actions for ResumeInterests model.
 */
class ResumeInterestsController extends BaseController
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
     * Lists all ResumeInterests models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeInterestsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeInterests model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeInterestsSearch();
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
        $model = new ResumeInterests();
        $searchModel = new ResumeInterestsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model->State = 1;
        $model->idResume = Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers = Yii::$app->user->getIdentity()->IdUsers;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->IdResumeSkills]);
        }

        return $this->renderPartial('create', [
            'model' => $model,
            'dataProvider' => $dataProvider
        ], TRUE, FALSE);
    }

    /**
     * Updates an existing ResumeInterests model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdResumeInterests]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResumeInterests model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->actionCreate();
    }

    /**
     * Finds the ResumeInterests model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeInterests the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeInterests::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
