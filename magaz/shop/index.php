<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
if($_SESSION['lang']==NULL)
$_SESSION['lang'] = "ru";
//echo $_SESSION['lang']; 

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');


// Вызов Router
$router = new Router();
$router->run();