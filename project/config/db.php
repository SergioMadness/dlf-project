<?php
return [
    'db' => [
        'class' => 'dlf\components\dbconnection\PDOConnection',
        'dsn' => 'mysql:host=localhost;dbname=test',
        'login' => 'root',
        'password' => ''
    ],
    'auth' => [
        'class' => 'dlf\components\authorization\Authorization'
    ]
];
