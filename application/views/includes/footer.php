<?php

$spLink = [
  ["title" => "SIM Card/Pocket wifi In Japan", "linkUrl" => "https://www.sakuramobile.jp/travel/?idev_id=149"],
  ["title" => "ESIM in Japan", "linkUrl" => "https://www.airalo.com/japan-esim?irclickid=1cbQkE0aDxyKTO2XI2WM00OXUkHQWhU5Zzl4Ww0&irgwc=1&utm_source=impact&utm_medium=affiliate&utm_campaign=JTB%20International%20Canada"],
  ["title" => "Travel Insurance Manulife", "linkUrl" => "https://www.igoinsured.com/Direct/ManulifeGlobal.aspx?ag=JTBIVBC&lang=E"],
];

$jpLink = [
  ["title" => "Visitor Visa in Japan", "linkUrl" => "/visitor-visa-in-japan"],
];

$dataLink = [
  ["title" => "_AboutUs", "linkUrl" => "/about-us",],
  ["title" => "_ContactUs", "linkUrl" => "/contact-us",],
  ["title" => "_TermsAndConditions", "linkUrl" => "/terms-conditions",],
  ["title" => "_PrivacyPolicy", "linkUrl" => "/privacy-policy",],
  ["title" => "_CookiesPolicy", "linkUrl" => "/cookies-policy",],
  ["title" => "_Careers", "linkUrl" => "/careers",],
  ["title" => "_QandA", "linkUrl" => "https://support.jtb.ca/portal/en/home", "target" => "_blank"],
  // ["title" => "_RegisterNewsLetter", "linkUrl" => "/newsletter",],
  ["title" => "_InquiryForm", "linkUrl" => "/inquiry-form",],
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
  <div class="row g-3">
    <div class="col-12 col-lg-6">
      <div class="pb-3 fs-5 text-white">Information</div>
      <div class="row gy-1 gx-3">
        <?php
        foreach ($dataLink as $key => $item) {
          $target = isset($item['target']) ? 'target="_blank"' : '';
        ?>
          <div class="col-12 col-lg-6">
            <a href="<?php echo $item['linkUrl'] . $getURLLang; ?>" class="d-flex fs-7 text-white text-decoration-none" <?php echo $target; ?>>
              <div class="pe-2 opacity-50"><i class="fas fa-angle-right"></i></div>
              <div class="ps-1"><?php echo  getTS($item['title'], $lang, $mlangs);  ?></div>
            </a>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
    <div class="col-12 col-lg-3">
      <div class="pb-3 fs-5 text-white">Service</div>
      <div class="row gy-1 gx-3">
        <?php
        foreach ($spLink as $key => $item) {
          $target = isset($item['target']) ? 'target="_blank"' : '';
          $idLink = isset($item['idLink']) ? 'id="' . $item['idLink'] . '"' : '';
        ?>
          <div class="col-12">
            <a href="<?php echo $item['linkUrl'] . $getURLLang; ?>" class="d-flex fs-7 text-white text-decoration-none" <?php echo $idLink; ?> <?php echo $target; ?>>
              <div class="pe-2 opacity-50"><i class="fas fa-angle-right"></i></div>
              <div class="ps-1"><?php echo getTS($item['title'], $lang, $mlangs); ?></div>
            </a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
    <div class="col-12 col-lg-3">
      <div class="pb-3 fs-5 text-white">Before You Go</div>
      <div class="row gy-1 gx-3">
        <?php
        foreach ($jpLink as $key => $item) {
          $target = isset($item['target']) ? 'target="_blank"' : '';
          $idLink = isset($item['idLink']) ? 'id="' . $item['idLink'] . '"' : '';
        ?>
          <div class="col-12">
            <a href="<?php echo $item['linkUrl'] . $getURLLang; ?>" class="d-flex fs-7 text-white text-decoration-none" <?php echo $idLink; ?> <?php echo $target; ?>>
              <div class="pe-2 opacity-50"><i class="fas fa-angle-right"></i></div>
              <div class="ps-1"><?php echo getTS($item['title'], $lang, $mlangs); ?></div>
            </a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
<div class="container py-4 d-none">
  <div class="pb-4">
    <div class="row gy-1 gx-3">
      <?php
      foreach ($spLink as $key => $item) {
        $target = isset($item['target']) ? 'target="_blank"' : '';
        $idLink = isset($item['idLink']) ? 'id="' . $item['idLink'] . '"' : '';
      ?>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
          <a href="<?php echo $item['linkUrl'] . $getURLLang; ?>" class="d-flex fs-7 text-white text-decoration-none" <?php echo $idLink; ?> <?php echo $target; ?>>
            <div class="pe-2 opacity-50"><i class="fas fa-angle-right"></i></div>
            <div class="ps-1"><?php echo getTS($item['title'], $lang, $mlangs); ?></div>
          </a>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="pt-4">
      <hr class="m-0 p-0 text-light">
    </div>
  </div>
  <div class="row gy-1 gx-3">
    <?php
    foreach ($dataLink as $key => $item) {
      $target = isset($item['target']) ? 'target="_blank"' : '';
    ?>
      <div class="col-6 col-sm-6 col-md-4 col-lg-3">
        <a href="<?php echo $item['linkUrl'] . $getURLLang; ?>" class="d-flex fs-7 text-white text-decoration-none" <?php echo $target; ?>>
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
    <div class="pb-4 d-none">



      <!--Zoho Campaigns Web-Optin Form's Header Code Starts Here-->

      <script type="text/javascript" src="https://kjevrw-zgph.maillist-manage.net/js/optin.min.js" onload="setupSF('sf3z71162156feb57727e6a169e60efbc92a7465970681705292bc79ce05edec2690','ZCFORMVIEW',false,'light',false,'0')"></script>
      <script type="text/javascript">
        function runOnFormSubmit_sf3z71162156feb57727e6a169e60efbc92a7465970681705292bc79ce05edec2690(th) {
          /*Before submit, if you want to trigger your event, "include your code here"*/
        };
      </script>

      <style>
        .quick_form_5_css * {
          -webkit-box-sizing: border-box !important;
          -moz-box-sizing: border-box !important;
          box-sizing: border-box !important;
          overflow-wrap: break-word
        }

        @media only screen and (max-width: 600px) {
          .quick_form_5_css[name="SIGNUP_BODY"] {
            width: 100% !important;
            min-width: 100% !important;
            margin: 0px auto !important;
            padding: 0px !important
          }

          .SIGNUP_FLD {
            width: 90% !important;
            margin: 10px 5% !important;
            padding: 0px !important
          }

          .SIGNUP_FLD input {
            margin: 0 !important
          }
        }
      </style>

      <!--Zoho Campaigns Web-Optin Form's Header Code Ends Here--><!--Zoho Campaigns Web-Optin Form Starts Here-->

      <div id="sf3z71162156feb57727e6a169e60efbc92a7465970681705292bc79ce05edec2690" data-type="signupform" style="opacity: 1;">
        <div id="customForm">
          <div class="quick_form_5_css" style="background-color: rgb(204, 0, 0); width: 500px; z-index: 2; font-family: Arial; border: 1px solid rgb(206, 206, 206); overflow: hidden" name="SIGNUP_BODY">
            <div>
              <div style="font-size: 16px; font-family: &quot;Arial&quot;; font-weight: normal; color: rgb(255, 255, 255); text-align: left; padding: 15px 35px 5px; width: 100%; display: block; box-sizing: border-box" id="SIGNUP_HEADING">Subscribe to JTB Canada Newsletter</div>
              <div style="position:relative;">
                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                      <tr>
                        <td width="10%">
                          <img class="successicon" src="https://kjevrw-zgph.maillist-manage.net/images/challangeiconenable.jpg" align="absmiddle">
                        </td>
                        <td>
                          <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <form method="POST" id="zcampaignOptinForm" style="margin: 0px; width: 100%" action="https://kjevrw-zgph.maillist-manage.net/weboptin.zc" target="_zcSignup">
                <div style="background-color: rgb(255, 235, 232); padding: 10px; color: rgb(210, 0, 0); font-size: 11px; margin: 20px 10px 0px; border: 1px solid rgb(255, 217, 211); opacity: 1; display: none" id="errorMsgDiv">Please correct the marked field(s) below.</div>
                <div style="position: relative; margin: 15px 0 10px 10px; width: 150px; height: 28px; display: inline-block" class="SIGNUP_FLD">
                  <input type="text" style="font-size: 12px; border-width: 1px; border-color: rgb(214, 205, 205); border-style: solid; width: 100%; height: 100%; z-index: 4; outline: none; padding: 5px 10px; color: rgb(113, 106, 106); text-align: left; font-family: &quot;Arial&quot;; border-radius: 0px; background-color: rgb(255, 255, 255); box-sizing: border-box" placeholder="Email" changeitem="SIGNUP_FORM_FIELD" name="CONTACT_EMAIL" id="EMBED_FORM_EMAIL_LABEL">
                </div>
                <div style="position: relative; margin: 15px 0 10px 10px; width: 150px; height: 28px; display: inline-block" class="SIGNUP_FLD">
                  <input type="text" style="font-size: 12px; border-width: 1px; border-color: rgb(214, 205, 205); border-style: solid; width: 100%; height: 100%; z-index: 4; outline: none; padding: 5px 10px; color: rgb(113, 106, 106); text-align: left; font-family: &quot;Arial&quot;; border-radius: 0px; background-color: rgb(255, 255, 255); box-sizing: border-box" placeholder="First name" changeitem="SIGNUP_FORM_FIELD" name="FIRSTNAME" id="FIRSTNAME">
                </div>
                <div style="position: relative; width: 100px; height: 28px; margin: 0 0 10px 12px; display: inline-block" class="SIGNUP_FLD">
                  <input type="button" style="text-align: center; width: 100%; height: 100%; z-index: 5; border: 0; color: rgb(255, 255, 255); cursor: pointer; outline: none; font-size: 14px; background-color: rgb(67, 67, 67); border-radius: 1px" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" value="Join Now">
                </div>
                <input type="hidden" id="fieldBorder" value="">
                <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                <input type="hidden" id="emailReportId" name="emailReportId" value="">
                <input type="hidden" id="formType" name="formType" value="QuickForm">
                <input type="hidden" name="zx" id="cmpZuid" value="12d58512f">
                <input type="hidden" name="zcvers" value="3.0">
                <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                <input type="hidden" id="zcld" name="zcld" value="1bf327267bfbe1d5">
                <input type="hidden" id="zctd" name="zctd" value="1bf327267bf8d029">
                <input type="hidden" id="document_domain" value="">
                <input type="hidden" id="zc_Url" value="kjevrw-zgph.maillist-manage.net">
                <input type="hidden" id="new_optin_response_in" value="0">
                <input type="hidden" id="duplicate_optin_response_in" value="0">
                <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW">
                <input type="hidden" id="zc_formIx" name="zc_formIx" value="3z71162156feb57727e6a169e60efbc92a7465970681705292bc79ce05edec2690">
                <input type="hidden" id="viewFrom" value="URL_ACTION">
                <span style="display: none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span>
                <span style="display: none" id="dt_FIRSTNAME">1,false,1,First Name,2</span>
                <span style="display: none" id="dt_LASTNAME">1,false,1,Last Name,2</span>
              </form>
            </div>
          </div>
        </div>
        <img src="https://kjevrw-zgph.maillist-manage.net/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
      </div>
      <input type="hidden" id="signupFormType" value="QuickForm_Horizontal">
      <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
      <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
        <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
          <img src="https://kjevrw-zgph.maillist-manage.net/images/videoclose.png">
        </span>
        <div id="zcOptinSuccessPanel"></div>
      </div>

      <!--Zoho Campaigns Web-Optin Form Ends Here-->
    </div>
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

<script>
  document.getElementById("TravelInsurance").addEventListener("click", function() {
    alert("You are about to leave our official site");
  });

  document.getElementById("SIMCard").addEventListener("click", function() {
    alert("You are about to leave our official site");
  });
</script>

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