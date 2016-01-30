<?php
return [
    'language'=>'zh-CN',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(

            ),
        ],
        'i18n'=>[
            'translations'=>[
                'backend*'=>[
                    'class'=>'yii\i18n\PhpMessageSource',
                    'basePath'=>'@backend/messages',
                    'fileMap'=>[
                        'backend'=>'backend.php',
                    ],
                ],
                'frontend*'=>[
                    'class'=>'yii\i18n\PhpMessageSource',
                    'basePath'=>'@frontend/messages',
                    'fileMap'=>[
                        'frontend'=>'frontend.php',
                    ],
                ],
                'common*'=>[
                    'class'=>'yii\i18n\PhpMessageSource',
                    'basePath'=>'@common/messages',
                    'fileMap'=>[
                        'common'=>'common.php',
                    ],
                ],
            ],
        ],
    ],
];
