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
  case "ABOUT-US": $thisPage = '/pages/aboutus/aboutus_page.php'; break;
  case "CONTACT-US": $thisPage = '/pages/contactus/contactus_page.php'; break;
  case "TERMS-CONDITIONS": $thisPage = '/pages/terms/terms_page.php'; break;
  case "PRIVACY-POLICY": $thisPage = '/pages/privacypolicy/privacypolicy_page.php'; break;
  case "COOKIES-POLICY": $thisPage = '/pages/cookiespolicy/cookiespolicy_page.php'; break;
  case "CAREERS": $thisPage = '/pages/careers/careers_page.php'; break;
  case "NEWSLETTER": $thisPage = '/pages/newsletter/newsletter_page.php'; break;
  case "BLOG": $thisPage = '/pages/blog/blog_page.php'; break;
  case "BROCHURE": $thisPage = '/pages/brochure/brochure_page.php'; break;
  case "SITEMAP": $thisPage = '/pages/sitemap/sitemap_page.php'; break;
  default: $thisPage = '/pages/filenotfound/filenotfound_page.php'; break;
}

