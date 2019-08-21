<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;
use frontend\models\SignupForm;
use frontend\components\CommandDefinitionsComponent;
use app\components\BaseController;
use app\models\Company;
/**
 * Description of DashboardController
 *
 * @author armen
 */
class CompanyController extends BaseController {
    
    public $layout = 'talentsLayout';
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
               // 'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','index'],
                        'allow' => true,
                        'matchCallback' => function($rule, $action){
                            return Yii::$app->user->getIdentity()->Role===CommandDefinitionsComponent::companyRole;
                        },
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function getUserCompany($userID){
        $company = new Company();
        return $company->find()->where(['=', 'idUsers', $userID])->all();
    }
    
    public function actionIndex()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
        }
        $userID = Yii::$app->user->identity->IdUsers;
        $company = $this->getUserCompany($userID);
        return $this->render('index', compact('model', 'company'));
    }
    
}
