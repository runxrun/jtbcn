<?php

// include_once('languages-data.php');

$mlangs = [
  '_Home' => ['en' => 'Home', 'jp' => 'ホーム'],
  '_Activities' => ['en' => 'Activities', 'jp' => 'アクティビティ'],
  '_Packages' => ['en' => 'Packages', 'jp' => 'パッケージ'],
  '_JapanRailPass' => ['en' => 'Japan Rail Pass', 'jp' => 'ジャパンレールパス'],
  '_Tickets' => ['en' => 'Tickets', 'jp' => 'チケット'],
  '_Hotels' => ['en' => 'Hotels', 'jp' => 'ホテル'],
  '_SignIn' => ['en' => 'Sign in', 'jp' => 'サインイン'],
];

// $lang = strtolower($_GET['lang']);

$lang = isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en';

function getTS($key, $lang, $translations)
{
  if (isset($translations[$key])) {
    if (isset($translations[$key][$lang])) {
      return $translations[$key][$lang];
    } else {
      return $translations[$key]['en'];
    }
  } else {
    return $key;
  }
}


