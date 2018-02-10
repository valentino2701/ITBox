<?php
session_start();
date_default_timezone_set('Europe/Sofia');

require 'vendor/autoload.php';
include('functions.php');

use Philo\Blade\Blade;
use Illuminate\Database\Capsule\Manager as Capsule;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$template = new Blade($views, $cache);

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'itbox',
    'username'  => 'root',
    'password'  => 'smotan',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
