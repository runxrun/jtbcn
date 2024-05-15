<?php
$dataLink = [
  ["title" => "_AboutUs", "linkUrl" => "/about-us",],
  ["title" => "_ContactUs", "linkUrl" => "/contact-us",],
  ["title" => "_TermsAndConditions", "linkUrl" => "/terms-conditions",],
  ["title" => "_PrivacyPolicy", "linkUrl" => "/privacy-policy",],
  ["title" => "_CookiesPolicy", "linkUrl" => "/cookies-policy",],
  ["title" => "_Careers", "linkUrl" => "/careers",],
  ["title" => "_QandA", "linkUrl" => "https://support.jtb.ca/portal/en/home",],
  ["title" => "_RegisterNewsLetter", "linkUrl" => "/newsletter",],
  ["title" => "_Blog", "linkUrl" => "/blog",],
  ["title" => "_Brochure", "linkUrl" => "/brochure",],
  ["title" => "_SiteMap", "linkUrl" => "/sitemap",],
];




// ['_AboutUs' => ['en' => 'About us', 'jp' => '私たちについて']],
// ['_ContactUs' => ['en' => 'Contact us', 'jp' => 'お問い合わせ']],
// ['_TermsAndConditions' => ['en' => 'Terms and conditions', 'jp' => '利用規約']],
// ['_PrivacyPolicy' => ['en' => 'Privacy policy', 'jp' => 'プライバシーポリシー']],
// ['_CookiesPolicy' => ['en' => 'Cookies policy', 'jp' => 'クッキーポリシー']],
// ['_Careers' => ['en' => 'Careers', 'jp' => '求人']],
// ['_Q and A' => ['en' => 'Q and A', 'jp' => 'Q & A']],
// ['_RegisterNewsLetter' => ['en' => 'Register News Letter', 'jp' => 'ニュースレター登録']],
// ['_Blog' => ['en' => 'Blog', 'jp' => 'ブログ ']],
// ['_brochure' => ['en' => 'brochure', 'jp' => 'パンフレット']],
// ['_Site map' => ['en' => 'Site map', 'jp' => 'jp = サイトマップ']],

?>
<div class="container py-4">
  <div class="row gy-1 gx-3">
    <?php
    foreach ($dataLink as $key => $item) {
    ?>
      <div class="col-6 col-sm-6 col-md-4 col-lg-3">
        <a href="<?php echo $item['linkUrl']; ?>" class="d-flex fs-7 text-white text-decoration-none">
          <div class="pe-2 opacity-50"><i class="fas fa-angle-right"></i></div>
          <div class="ps-1"><?php echo  getTS($item['title'], $lang, $mlangs);  ?></div>
        </a>
      </div>
    <?php
    }
    ?>
  </div>
</div>
<div class="bg-primary">
  <div class="container py-3">
    <div class="row g-3 align-items-center justify-content-between">
      <div class="col-auto">
        <div class="row align-items-center g-3">
          <div class="col-auto">
            <div class="fs-8 text-white">
              Copyright &copy; 2024. JTB CANADA. All Rights Reserved.
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex">
              <div class="p-0">
                <a rel="noreferrer" target="_blank" href="https://www.facebook.com/JTB.Singapore/">
                  <img src="https://sg.jtbtrip.com/assets/images/icons/facebook-icon.svg" alt="Facebook" width="32">
                </a>
              </div>
              <div class="p-0">
                <a rel="noreferrer" target="_blank" href="https://www.instagram.com/jtb_singapore/?hl=en">
                  <img src="https://sg.jtbtrip.com/assets/images/icons/instagram-icon.svg" alt="Instagram" width="32">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto">
        <div class="fs-8 text-white">
          Powered by 11-Infotech System.
        </div>
      </div>
    </div>
  </div>
</div>
<?php
/*


<div class="container py-3">
  <div class="py-4">
    <div class="row g-3">
      <div class="col-12 col-lg-9">
        <div class="row g-3">
          <div class="col-12 col-lg-4">
            <div class="pb-2 rn-text-title fs-5 text-white">Information</div>
            <div class="pb-3">
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">About us</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Terms and conditions</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Privacy policy</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">FAQs</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Contact us</a></div>
            </div>            
          </div>
          <div class="col-12 col-lg-4">
            <div class="pb-2 rn-text-title fs-5 text-white">Service</div>
            <div class="pb-3">
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Check your booking</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Travel Insurance (Manulife)</a></div>
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">SIM Card/Pocket wifi in Japan</a></div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="pb-2 rn-text-title fs-5 text-white">Before You Go</div>
            <div class="pb-3">
              <div class="pt-0"><a href="javascript: void(0);" class="fs-7 text-white rn-ft-link">Visitor Visa</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        &nbsp;
      </div>
    </div>
  </div>
  <div class="pb-4">
    <div class="row justify-content-between g-3">
      <div class="col-12 col-lg-auto">
        <div class="text-center">
          <img src="/application/images/JTB-LOGO.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-12 col-lg-auto">
        <div class="text-center fs-7 text-white">
          2023 &copy; <span class="text-nowrap">JTB CANADA</span>
          Powered by <span class="text-nowrap">11-Infotech System</span>
        </div>
      </div>
    </div>
  </div>
</div>

*/
?>