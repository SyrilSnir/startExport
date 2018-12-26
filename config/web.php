<?php
$db = require __DIR__ . '/db.php';

return [
    'id' => 'startExport',
    'basePath' => realpath(__DIR__ .'/../'),
    'bootstrap' => [],                   // модули, запускаемые с самого начала
    'language' => 'ru-Ru',
    'components' => [
        'db' => $db,
		'assetManager' => [
			'appendTimestamp' => true
		],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],                        
        'request' => [
            'cookieValidationKey' => 'ORGEGPKITEJGIJIGHJRTOIHJORIBOKJI'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'admin@startexport.ru',
                'password' => '>6SeKqB*',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],
    'modules' => [
    ]
];
