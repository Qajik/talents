<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\components;

/**
 * Description of CommandDefinitionsComponent
 *
 * @author armen
 */
class CommandDefinitionsComponent {
    
    const talentRole = 4;
    const companyRole = 5;
    
    const userRoles = [
        self::talentRole => 'talentRole',
        self::companyRole => 'companyRole'
    ];
    
    const userRoleNames = [
        self::talentRole => 'talents',
        self::companyRole => 'companies'
    ];
    
    const AUTOCOMPLATE_MODELS = [
        0=>'Undefined',
        1=>'\app\models\OptionsUniversities',
        2=>'\app\models\Company'
    ];
    
    
    const FILES_RELATED_TABLES = [
        'Undefined',
        'TalentsProjects'
    ];
    
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
}
