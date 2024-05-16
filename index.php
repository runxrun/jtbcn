<?php
session_start();
$expires = 120;
header("Expires: " . gmdate("D, d M Y H:i:s", time() + $expires) . "GMT");
// require_once("config/ConnectDB.php");
// require_once("func/funcContent.php");
$pathData = $_SERVER['PATH_INFO'];
if ($_SERVER["HTTPS"] == "on") {
	$scheme = "https://";
} else {
	$scheme = "http://";
}

$pathhost = $scheme . $_SERVER["HTTP_HOST"];
$sitename = 'http://jtbcn.assaypage.com';

if (empty($pathData)) {
	$pathData = $_SERVER['REQUEST_URI'];
}

$segment = isset($pathData) ? explode('/', preg_replace('~^/?(.*?)/?$~', '$1', $pathData)) : array();
$_dataLvl = 0;
$chkSegment = strtoupper($segment[$_dataLvl]);

require_once("application/views/setpage.php");
require_once("application/views/languages/languages.php");

$getURLLang = strtoupper($lang) === 'JP' ? '/?lang=jp' : '';
$backToHome = strtoupper($lang) === 'JP' ? '/?lang=jp' : '/';

require_once("application/views/template.php");

// switch (strtoupper($segment[0])) {
// 	case '':
// 	default:
// 		require_once("application/views/template.php");
// 		break;
// }
