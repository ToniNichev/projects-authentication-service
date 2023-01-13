<?php
define('ROOTPATH', __DIR__);

include  ROOTPATH ."/config/config.php";

$site = $_GET['site'];
$returnPage = $_GET['page'];
$baseUrl = $authCoinfig->sites->$site->baseUrl;

$page = $_GET['page'];
$returnUrl = $baseUrl . $page;

//die(">>>". $returnUrl);

session_destroy();
// Redirect the user to the initial app 
header('Location: ' . $returnUrl);