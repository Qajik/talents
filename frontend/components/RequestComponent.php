<?php

namespace frontend\components;

//Component  use yii\base\Component;
class RequestComponent
{
    const OPTION_VIEW = 1;
    const LIST_VIEW = 2;
    const TALENT_OPTIONS = [
        'View' => [
            1 => 'option_view',
            2 => 'list_view'
        ]
    ];
    const MAIN_LOGIN = [
        'Role' => [
            4 => 'talent',
            5 => 'company'
        ]
    ];

}
