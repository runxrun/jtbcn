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
    } elseif (strtoupper($currentPage[1]) === "DESCRIPTION") {
      $thisPage = '/pages/activity/activity_description/activity_description_page.php';
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
    } elseif (strtoupper($currentPage[1]) === "DESCRIPTION") {
      $thisPage = '/pages/package/package_description/package_description_page.php';
    } elseif (strtoupper($currentPage[1]) === "RATES") {
      $thisPage = '/pages/package/package_rates/package_rates_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }

    break;
  case "JRPASS":
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
      $thisPage = '/pages/jrpass/jrpass_search/jrpass_search_page.php';
    } elseif (strtoupper($currentPage[1]) === "RESULT") {
      $thisPage = '/pages/jrpass/jrpass_result/jrpass_result_page.php';
    } elseif (strtoupper($currentPage[1]) === "DESCRIPTION") {
      $thisPage = '/pages/jrpass/jrpass_description/jrpass_description_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }

    // $thisPage = '/pages/jrpass/jrpass_search/jrpass_search_page.php';
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
  case "CART":

    $thisPage = '/pages/cart/cart_page.php';
    break;
  case "PAYMENT":

    $thisPage = '/pages/payment/payment_page.php';
    break;
  case "CMS":
    if (
      $currentPage[2] === "TUEyMzAxMDAAweEd" ||
      $currentPage[2] === "TUEyMzExIPOESaWL"
    ) {
      $thisPage = '/pages/cms/cms_description/cms_description_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    // cms_description_page.php
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
  case "ACCOUNT":
    if (strtoupper($currentPage[1]) === "BOOKINGS") {
      $thisPage = '/pages/account/bookings/bookings_page.php';
    } elseif (strtoupper($currentPage[1]) === "BOOKINGS-DETAIL") {
      $thisPage = '/pages/account/bookings-detail/bookings-detail_page.php';
    } elseif (strtoupper($currentPage[1]) === "PROFILE") {
      $thisPage = '/pages/account/profile/profile_page.php';
    } elseif (strtoupper($currentPage[1]) === "CHANGE-PASSWORD") {
      $thisPage = '/pages/account/changepassword/changepassword_page.php';
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
  case "INQUIRY-FORM":
    $thisPage = '/pages/inquiryform/inquiryform_page.php';
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
  case "DESTINATIONS":
    if ($currentPage[3] === 'TUEAbcDefABcdfe') {
      $thisPage = '/pages/destinations/country_destination/country_page.php';
    } else if ($currentPage[3] === 'TUEAbcDefGhijK') {
      $thisPage = '/pages/destinations/city_destination/city_page.php';
    } else {
      $thisPage = '/pages/filenotfound/filenotfound_page.php';
    }
    break;
  case "BROCHURE":
    $thisPage = '/pages/brochure/brochure_page.php';
    break;
  case "INQUIRY":
    $thisPage = '/pages/inquiry/inquiry_page.php';
    break;
  case "SITEMAP":
    $thisPage = '/pages/sitemap/sitemap_page.php';
    break;
  default:
    $thisPage = '/pages/filenotfound/filenotfound_page.php';
    break;
}