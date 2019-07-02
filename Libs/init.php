<?php

/*
* 初期処理
*/

define('BASEPATH', realpath(__DIR__ . '/../'));

require_once(BASEPATH . '/vender/autoload.php');

require_once(BASEPATH . '/Libs/Config.php');

$conf = Config::getAll();

requireonce(BASEPATH . '/Libs/DB.php');

$dir=$conf['view_front']['template_dir'];
$loader = new \Twig\Loader\FilesystemLoader($dir);
$twig = new \Twig\Environment($loader);