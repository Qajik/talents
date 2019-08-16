<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\helpers;

/**
 * Description of StaticHelper
 *
 * @author armen
 */
class StaticHelper {
    //put your code here
    
    public static function parseDate($date, $prop){
        return date_parse_from_format("Y-m-d", $date)[$prop];
    }
    
    public static function getYearKeyInList($date,$list){
        $fliped = array_flip($list);
        $year   = self::parseDate($date,'year');
        return $fliped[$year];
    }
    
    public static function groupArrayByColumn($array, $params, $callback = FALSE){
        $outPut = [];
        $column = isset($params['groupBy'])?$params['groupBy']:NULL;
        $userKey= isset($params['key'])?$params['key']:NULL;
        
        foreach ($array as $key=>$val){
            if($userKey)
                $outPut[$val->$column][$val->$userKey] = $callback?$callback($val):$val;
            else
                $outPut[$val->$column][] = $callback?$callback($val):$val;
        }
        
        return $outPut;
        
    }
    
}
