<?php

$currentPage = $segment;
switch (strtoupper($currentPage[0])) {
  case "":
  case "?LANG=EN":
  case "?LANG=JP":
    $thisPage = '/pages/homepage/home_page.php';
    break;
  case "ACTIVITIES":
    if (
      empty($currentPage[1]) ||
      strtoupper($currentPage[1]) === '?LANG=EN' ||
      strtoupper($currentPage[1]) === '?LANG=JP'
    ) {
      $segment_1 = '';
    } else {
      $segment_1 = $currentPage[1];
    }
    if (empty($segment_1)) {
      $thisPage = '/pages/activity/activity_search/activity_search_page.php';
    } elseif (strtoupper($currentPage[1]) === "RESULT") {
      $thisPage = '/pages/activity/activity_result/activity_result_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    break;
  case "PACKAGES":
    if (
      empty($currentPage[1]) ||
      strtoupper($currentPage[1]) === '?LANG=EN' ||
      strtoupper($currentPage[1]) === '?LANG=JP'
    ) {
      $segment_1 = '';
    } else {
      $segment_1 = $currentPage[1];
    }

    if (empty($segment_1)) {
      $thisPage = '/pages/package/package_search/package_search_page.php';
    } elseif (strtoupper($currentPage[1]) === "RESULT") {
      $thisPage = '/pages/package/package_result/package_result_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }

    break;
  case "JRPASS":
    $thisPage = '/pages/jrpass/jrpass_search/jrpass_search_page.php';
    break;
  case "TICKETS":
    if (
      empty($currentPage[1]) ||
      strtoupper($currentPage[1]) === '?LANG=EN' ||
      strtoupper($currentPage[1]) === '?LANG=JP'
    ) {
      $segment_1 = '';
    } else {
      $segment_1 = $currentPage[1];
    }

    if (empty($segment_1)) {
      $thisPage = '/pages/ticket/ticket_search/ticket_search_page.php';
    } elseif (strtoupper($currentPage[1]) === "RESULT") {
      $thisPage = '/pages/ticket/ticket_result/ticket_result_page.php';
    } elseif (strtoupper($currentPage[1]) === "DESCRIPTION") {
      $thisPage = '/pages/ticket/ticket_description/ticket_description_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    break;
  case "HOTELS":
    if (
      empty($currentPage[1]) ||
      strtoupper($currentPage[1]) === '?LANG=EN' ||
      strtoupper($currentPage[1]) === '?LANG=JP'
    ) {
      $segment_1 = '';
    } else {
      $segment_1 = $currentPage[1];
    }
    if (empty($segment_1)) {
      $thisPage = '/pages/hotel/hotel_search/hotel_search_page.php';
    } elseif (strtoupper($currentPage[1]) === "RESULT") {
      $thisPage = '/pages/hotel/hotel_result/hotel_result_page.php';
    } elseif (strtoupper($currentPage[1]) === "DESCRIPTION") {
      $thisPage = '/pages/hotel/hotel_description/hotel_description_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    break;
  case "AUTH":
    if (strtoupper($currentPage[1]) === "SIGN-IN") {
      $thisPage = '/pages/authorization/signin/signin_page.php';
    } elseif (strtoupper($currentPage[1]) === "REGISTER") {
      $thisPage = '/pages/authorization/register/register_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    break;
  case "ABOUT-US":
    $thisPage = '/pages/aboutus/aboutus_page.php';
    break;
  case "CONTACT-US":
    $thisPage = '/pages/contactus/contactus_page.php';
    break;
  case "TERMS-CONDITIONS":
    $thisPage = '/pages/terms/terms_page.php';
    break;
  case "PRIVACY-POLICY":
    $thisPage = '/pages/privacypolicy/privacypolicy_page.php';
    break;
  case "COOKIES-POLICY":
    $thisPage = '/pages/cookiespolicy/cookiespolicy_page.php';
    break;
  case "CAREERS":
    $thisPage = '/pages/careers/careers_page.php';
    break;
  case "NEWSLETTER":
    $thisPage = '/pages/newsletter/newsletter_page.php';
    break;
  case "BLOG":
    if ($currentPage[2] === 'TUEyMzA0MDAxMg') {
      $thisPage = '/pages/blog/blog-group-1/blog-group-1-page.php';
    } elseif ($currentPage[3] === 'TUEyMzA0MDAxMg-TUEyOpE8CXGdAe') {
      $thisPage = '/pages/blog/blog-group-2/blog-group-2-page.php';
    } elseif ($currentPage[4] === 'TUEyMzA0MDAxMg-TUEyOpE8CXGdAe-TUEwUuP7AQGoDs') {
      $thisPage = '/pages/blog/blog-description/blog-description-page.php';
    } else {
      $thisPage = '/pages/blog/blog_page.php';
    }
    break;
  case "BROCHURE":
    $thisPage = '/pages/brochure/brochure_page.php';
    break;
  case "SITEMAP":
    $thisPage = '/pages/sitemap/sitemap_page.php';
    break;
  default:
    $thisPage = '/pages/filenotfound/filenotfound_page.php';
    break;
}