<?php
include __DIR__ . '/vendor/autoload.php';

use EasyWeChat\Foundation\Application;

$options = [
    'debug' => true,
    'app_id' => 'wx495e5b974eb1b9a5',
    'secret' => '',
    'token' => '',

    //'aes_key' => '',

    'log' => [
        'level' => 'debug',
        'file' => '/tmp/easywechat.log'
    ]
];

$app = new Application($option);

$server = $app->server;

$server->setMessageHandler(function($msg){
    return strrev($msg);
});

$response = $server->serve();

$response->send();
?>
