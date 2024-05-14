<?php

$currentPage = $segment;

// echo count($currentPage);

switch (strtoupper($currentPage[0])) {
  case "": $thisPage = '/pages/homepage/home_page.php'; break;
  case "ACTIVITY": $thisPage = '/pages/activity/activity_search/activity_search_page.php'; break;
  case "PACKAGE": $thisPage = '/pages/package/package_search/package_search_page.php'; break;
  case "JRPASS": $thisPage = '/pages/jrpass/jrpass_search/jrpass_search_page.php'; break;
  case "TICKET": $thisPage = '/pages/ticket/ticket_search/ticket_search_page.php'; break;
  case "HOTEL": $thisPage = '/pages/hotel/hotel_search/hotel_search_page.php'; break;
  default: $thisPage = '/pages/hotel/hotel_search/hotel_search_page.php'; break;
}

