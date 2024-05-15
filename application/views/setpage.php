<?php

$currentPage = $segment;
switch (strtoupper($currentPage[0])) {
  case "":
  case "?LANG=EN":
  case "?LANG=JP": $thisPage = '/pages/homepage/home_page.php'; break;
  case "ACTIVITIES": $thisPage = '/pages/activity/activity_search/activity_search_page.php'; break;
  case "PACKAGES": $thisPage = '/pages/package/package_search/package_search_page.php'; break;
  case "JAPAN-RAIL-PASS": $thisPage = '/pages/jrpass/jrpass_search/jrpass_search_page.php'; break;
  case "TICKETS": $thisPage = '/pages/ticket/ticket_search/ticket_search_page.php'; break;
  case "HOTELS": $thisPage = '/pages/hotel/hotel_search/hotel_search_page.php'; break;
  default: $thisPage = '/pages/hotel/hotel_search/hotel_search_page.php'; break;
}

