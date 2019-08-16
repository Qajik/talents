<?php

namespace frontend\controllers;

use frontend\components\RequestComponent;
use frontend\helpers\EnumHelper;
use Yii;
use app\models\ResumeVolunteer;
use frontend\models\ResumeVolunteerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\BaseController;

/**
 * ResumeVolunteerController implements the CRUD actions for ResumeVolunteer model.
 */
class ResumeVolunteerController extends BaseController
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
     * Lists all ResumeVolunteer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeVolunteerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeVolunteer model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($viewType = RequestComponent::LIST_VIEW)
    {
        $request        = Yii::$app->request;
        $viewType       = $request->get('viewType')?:$viewType;
        $viewEnum       = RequestComponent::TALENT_OPTIONS['View'];
        $getView        = $viewEnum[$viewType];

        $searchModel    = new ResumeVolunteerSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderPartial($getView, [
            'dataProvider' => $dataProvider,
            'yearList' => EnumHelper::getYearsList()
        ]);
    }
    /**
     * Creates a new ResumeVolunteer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResumeVolunteer();
        $model->idResume = Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        //var_dump(Yii::$app->request->post());die;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }

        return $this->renderPartial('create', [
            'model' => $model,
            'yearList' => EnumHelper::getYearsList(),
        ], TRUE, FALSE);

    }
  

    /**
     * Updates an existing ResumeVolunteer model.
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
            'model' => $model,
            'yearList' => EnumHelper::getYearsList(),
        ], TRUE, FALSE);
    }

    /**
     * Deletes an existing ResumeVolunteer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->actionView(RequestComponent::LIST_VIEW);
    }

    /**
     * Finds the ResumeVolunteer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeVolunteer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeVolunteer::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
