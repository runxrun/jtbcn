<?php
session_start();
$expires = 120;
header( "Expires: ".gmdate("D, d M Y H:i:s", time()+$expires)."GMT");
// require_once("config/ConnectDB.php");
// require_once("func/funcContent.php");
$pathData = $_SERVER['PATH_INFO'];
if($_SERVER["HTTPS"] == "on")
{ 
	$scheme = "https://";
}
else
{
	$scheme = "http://";
}

$pathhost=$scheme.$_SERVER["HTTP_HOST"];
$sitename='http://jtbcn.assaypage.com';

//if(empty($pathData)){$pathData=$_SERVER['ORIG_PATH_INFO'];}
if(empty($pathData)){$pathData = $_SERVER['REQUEST_URI'];}

$segment = isset($pathData) ? explode('/',preg_replace('~^/?(.*?)/?$~','$1',$pathData)) : array();
$_dataLvl=0;
$chkSegment=strtoupper($segment[$_dataLvl]);

switch (strtoupper($segment[0])) 
{
	case '' : 
	// case 'NEWS' : 
	// case 'OUR-TEAM' : 
	// case 'OUR-ACTIVITIES' : 
	// case 'OUR-SERVICES' : 
	// case 'PRIVACY-POLICY' : 
	// case 'COOKIES-POLICY' : 
	// case 'CONTACT-US' : 
	// case 'THANKYOU-FOR-YOUR-ENQUIRY' : 
	// case '11MEMBERZ-2023' : 
	// 	require_once("application/views-2021/template.php");
	// 	break;
	default :
		require_once("application/views/template.php");
		break;
}
?>
