<?php

namespace frontend\controllers;

use frontend\components\RequestComponent;
use Yii;
use app\models\ResumeLanguage;
use app\models\ResumeLanguageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\helpers\EnumHelper;
use app\components\BaseController;

/**
 * ResumeLanguageController implements the CRUD actions for ResumeLanguage model.
 */
class ResumeLanguageController extends BaseController
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
     * Lists all ResumeLanguage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeLanguageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeLanguage model.
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
        
        $searchModel    = new ResumeLanguageSearch();
        $searchModel->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);
        
        $fieldOptions['langLevelList']  = EnumHelper::getLanguageLevelList();
        $fieldOptions['langList']       = EnumHelper::getLanguageList();
        
        return $this->renderPartial($getView, [
            'dataProvider' => $dataProvider,
            'fieldOptions'  => $fieldOptions
        ]);
    }

    /**
     * Creates a new ResumeLanguage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model          = new ResumeLanguage();
        $model->idResume= Yii::$app->session->get('Resume')->IdResume;
        $model->idUsers = Yii::$app->user->getIdentity()->IdUsers;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionView(RequestComponent::LIST_VIEW);
        }
        
        $searchModel    = new ResumeLanguageSearch();
        $dataProvider   = $searchModel->search(Yii::$app->request->queryParams);
        
        $fieldOptions['langLevelList']  = EnumHelper::getLanguageLevelList();
        $fieldOptions['langList']       = EnumHelper::getLanguageList();

        return $this->renderPartial('create', [
            'model'         => $model,
            'dataProvider'  => $dataProvider,
            'fieldOptions'  => $fieldOptions
        ], TRUE, FALSE);

    }

    /**
     * Updates an existing ResumeLanguage model.
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

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ResumeLanguage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResumeLanguage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ResumeLanguage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeLanguage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
