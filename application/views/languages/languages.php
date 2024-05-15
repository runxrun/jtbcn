<?php

include_once('languages-data.php');

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


