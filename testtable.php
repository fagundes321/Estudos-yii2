<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/config/db.php';

// cria a conexão corretamente
$db = Yii::createObject($config);

// abre a conexão
$db->open();

// executa query
$tables = $db->createCommand("SELECT name FROM sys.tables")->queryAll();

// mostra resultado
print_r($tables);