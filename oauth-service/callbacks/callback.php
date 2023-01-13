<?php
define('ROOTPATH', __DIR__ .'/..');
include "../config/config.php";
$stringArray = explode('.', $_SERVER['HTTP_REFERER']);
$provider = $stringArray[1];

session_start();
$site = $_SESSION['site'];
$returnPage = $_SESSION['returnPage'];
$authMethod = $authCoinfig->sites->$site->authenticationMethod;
$baseUrl = $authCoinfig->sites->$site->baseUrl;

include "./callback-" . $provider . '.php';
