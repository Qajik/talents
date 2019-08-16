<?php
namespace app\components;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Session;
use frontend\components\CommandDefinitionsComponent;
use yii\db\Query;

class BaseController extends Controller
{
    public $userLanguage = 'hy_AM';


    public function beforeAction($action) {
       
        if($this->isUserLoggedin()){
            $currentBeforeAction = CommandDefinitionsComponent::userRoleNames[Yii::$app->user->getIdentity()->Role] . 'BeforeAction';
            $this->$currentBeforeAction($action);
        }else{
            return $this->redirect(['site/login']);
        }
        
        if(isset( Yii::$app->session->get('UserDetails')->UserLanguage))
            $this->userLanguage =  Yii::$app->session->get('UserDetails')->UserLanguage;
        
        return parent::beforeAction($action);
    }
    
    public function isUserLoggedin() : bool {
        return !Yii::$app->user->isGuest;
    }
    
    public function talentsBeforeAction($action): void{
        Yii::$app->session->get('isLoggedin');
        if(Yii::$app->session->get('isLoggedin')!=$this->isUserLoggedin()){
            $m_Resume       = new \app\models\Resume();
            $m_UserDetails  = new \app\models\UsersDetails();
            $resumeData     = $m_Resume->findOne(['idUsers'=>Yii::$app->user->getIdentity()->IdUsers]);
            $userDetails    = $m_UserDetails->findOne(['idUsers'=>Yii::$app->user->getIdentity()->IdUsers]);
            Yii::$app->session->set('Resume',$resumeData);
            Yii::$app->session->set('UserDetails',$userDetails);
            Yii::$app->session->set('isLoggedin',1);
        }
    }
    
    public function companyBeforeAction($action): void {
        
    }
    
    public function autocomplate(){
        
        $modelCommand   = Yii::$app->request->get('currentModelName');
        $searchBy       = Yii::$app->request->get('searchBy');
        $searchingValue = Yii::$app->request->get('value');
        
        $modelClass     = CommandDefinitionsComponent::AUTOCOMPLATE_MODELS[$modelCommand];
        $getTableIdArr  = explode('\\', $modelClass);
        $getTableIdAlias= $getTableIdArr[count($getTableIdArr)-1];
        
        $model = new $modelClass;
        $ress = (new Query)->select(['id'=>'Id' . $getTableIdAlias, 'value'=>$searchBy])
                ->from($model->tableName())
                ->andFilterWhere(['like',' LOWER(' . $searchBy . ') ', mb_strtolower($searchingValue)])
                ->andFilterWhere(['Status'=>CommandDefinitionsComponent::STATUS_ACTIVE])
                ->all();
        
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $ress;
    }
}
