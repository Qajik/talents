<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=talentsa_main',
            'username' => 'talentsa_talents',
            'password' => '$S0Rog#$&&u@',
            'charset' => 'utf8',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'class'=> Zelenin\yii\modules\I18n\components\I18N::className(),
            'languages' => ['en-EN', 'hy-AM'],
            'translations' => [
                '*' => [
                    'class' => yii\i18n\DbMessageSource::className(),
                    'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation']
                ]
            ]
        ],
    ],
];
