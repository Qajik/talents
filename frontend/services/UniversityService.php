<?php

namespace frontend\services;

use Yii;
use app\models\OptionsUniversities;
use frontend\components\CommandDefinitionsComponent;
/**
 * Description of UniversityService
 *
 * @author armen
 */
class UniversityService{
    //put your code here
    
    public function onCreateEducation($universityName){
        $a_university = OptionsUniversities::findOne(['Name'=>$universityName]);
        
        if(isset($a_university->IdOptionsUniversities) && (int)$a_university->IdOptionsUniversities>0){
            return $a_university->IdOptionsUniversities;
        }
        
        $model          = new OptionsUniversities();
        $model->Name    = $universityName;
        $model->Status  = CommandDefinitionsComponent::STATUS_INACTIVE;
        $model->save();
        return Yii::$app->db->getLastInsertID();
        
    }
}
