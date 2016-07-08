<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 08.07.2016
 * Time: 3:37
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection(
    [
        'driver'       =>       'mysql',
        'host'         =>       'localhost',
        'username'     =>       'root',
        'password'     =>       '',
        'database'     =>       'project3',
        'charset'      =>       'utf8',
        'collation'    =>       'utf8_unicode_ci',
        'prefix'    =>       ''
    ]
);

$capsule->bootEloquent();