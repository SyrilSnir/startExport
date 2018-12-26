<?php
$db = require __DIR__ . '/db-debug.php';

return [
    'id' => 'startExport',
    'basePath' => realpath(__DIR__ .'/../'),
    'bootstrap' => ['debug'],                   // модули, запускаемые с самого начала
    'language' => 'ru-Ru',
    'components' => [
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ], 
		'assetManager' => [
			'appendTimestamp' => true
		],		
        'request' => [
            'cookieValidationKey' => 'ORGEGPKITEJGIJIGHJRTOIHJORIBOKJI'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
           /* 'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.beget.ru',
                'username' => 'kotov@nsod.ru',
                'password' => 'Ntktvjcn2015',
                'port' => '465',
                'encryption' => 'ssl',
            ],*/
        ],
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];
