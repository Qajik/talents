<?php

namespace frontend\controllers;

use frontend\helpers\EnumHelper;
use Yii;
use app\models\ResumeAwards;
use frontend\models\ResumeAwardsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\RequestComponent;
use  yii\web\Session;
use app\components\BaseController;

/**
 * ResumeAwardsController implements the CRUD actions for ResumeAwards model.
 */
class ResumeAwardsController extends BaseController
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
     * Lists all ResumeAwards models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel    = new ResumeAwardsSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'   => $searchModel,
            'dataProvider'  => $dataProvider,
        ]);
    }


    public function actionView($viewType = RequestComponent::LIST_VIEW)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeAwardsSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderPartial($getView, [
            'dataProvider'  => $dataProvider,
            'yearList'      => EnumHelper::getYearsList(),
        ]);
    }

    /**
     * Creates a new ResumeAwards model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @throws \Throwable
     */
    public function actionCreate()
    {
        $model          = new ResumeAwards();
        $model->idResume= Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers = Yii::$app->user->getIdentity()->IdUsers;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }

        return $this->renderPartial('create', [
            'model'         => $model,
            'yearList'      => EnumHelper::getYearsList()
        ], TRUE, FALSE);
    }

    /**
     * Updates an existing ResumeAwards model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }

        return $this->renderPartial('update', [
            'model'     => $model,
            'yearList'  => EnumHelper::getYearsList()
        ]);
    }

    /**
     * Deletes an existing ResumeAwards model.
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

    /**
     * Finds the ResumeAwards model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeAwards the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeAwards::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
